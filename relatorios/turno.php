<?php include_once('header.php'); ?>	

<?php 
// Registros
$turnoID = ( isset( $_GET['t'] ) ) ? $_GET['t'] : 0; //pega o valor da url

if ( 0 != $turnoID ) : //se hover um curso valido

$qTurno = mysql_query("SELECT * FROM turnos WHERE id = $turnoID", $conexao) or die (mysql_error());
$rTurno = mysql_fetch_array( $qTurno );

$turnoNome = $rTurno[1];


$limite = 50; // define o numero de registros a serem exibidos
$pagina = ( isset( $_GET['pag'] ) ) ? $_GET['pag'] : 1; //pega o valor da url
$inicio = ($pagina * $limite) - $limite; // 1 * 50 - 50 = 0 => inicio: 0,50

$queryRecords = "SELECT inscricao2014_1.id, c1.curso AS 'curso1', t1.turno AS 'turno1', t1.id AS 'turno1_id', c2.curso AS 'curso2', t2.turno AS 'turno2', inscricao2014_1.nome, email, tel_fixo, tel_cel, tel_recado FROM `inscricao2014_1` LEFT JOIN cursos c1 ON c1.sigla = inscricao2014_1.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2014_1.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2014_1.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2014_1.curso2_turno WHERE t1.id = $turnoID LIMIT $inicio,$limite";
$resultRecords = mysql_query($queryRecords, $conexao) or die (mysql_error());

$total_registros = mysql_num_rows($resultRecords);
$total_paginas = ceil($total_registros / $limite);	/* Define o total de páginas a serem mostradas baseada
na divisão do total de registros pelo limite de registros a serem mostrados */

?>	
<div class="container">
	
	<div class="well">
		<h1>Inscrições <small>( <?php echo $turnoNome; ?> )</small></h1>
	</div>	

		<div class="row">
			<div class="span3">Número de inscritos:</div>
			<div class="span9"><?php echo $total_registros; ?></div>
		</div><!-- /row -->

		<hr />

		<table class="table table-striped table-bordered" >
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>Curso 1</th>
					<th>E-mail</th>
					<th style="width: 100px;">Telefone</th>
					<th style="width: 100px;">Celular</th>
					<th style="width: 100px;">Recados</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($dados = mysql_fetch_array($resultRecords)) : ?>
				<tr>
					<td><a href="candidato.php?id=<? echo $dados['id']; ?>"><?php echo $dados['id']; ?></a></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['curso1']; ?></td>
					<td style="text-transform:lowercase"><?php echo $dados['email']; ?></td>
					<td><?php echo ($dados['tel_fixo'] != 0) ? format_phone($dados['tel_fixo']) : ""; ?></td>
					<td><?php echo ($dados['tel_cel'] != 0) ? format_phone($dados['tel_cel']) : ""; ?></td>
					<td><?php echo ($dados['tel_recado'] != 0) ? format_phone($dados['tel_recado']) : ""; ?></td>
				</tr>			
			<?php endwhile; ?>
			</tbody>
		</table>

		<div class="pagination">
			<ul>
		<?php 

			echo "<li><a href='?t=".$turnoID."&pag=1'>&laquo;</a></li>";

			for($i=1; $i <= $total_paginas; $i++) {
				if( $pagina == $i ) {
					echo "<li class='active'><a href='#'>".$i."</a></li>"; //escreve somente o numero da página
				}
				else {
					echo "<li><a href='?t=".$turnoID."&pag=".$i."'> ".$i." </a></li>";
				}
			} 

			echo "<li><a href='?t=".$turnoID."&pag=".$total_paginas."'>»</a></li>";
		?>
			</ul>
		</div>


	</div>

<?php endif; ?>

<?php include_once('footer.php'); ?>