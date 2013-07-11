<?php include_once('header.php'); ?>	

<?php 
// Registros
$limite = 50; // define o numero de registros a serem exibidos
$pagina = ( isset( $_GET['pag'] ) ) ? $_GET['pag'] : 1; //pega o valor da url
$inicio = ($pagina * $limite) - $limite; // 1 * 50 - 50 = 0 => inicio: 0,50

$queryRecords = "SELECT inscricao2013_2.id, c1.curso AS 'curso1', t1.turno AS 'turno1', c2.curso AS 'curso2', t2.turno AS 'turno2', inscricao2013_2.nome FROM `inscricao2013_2` LEFT JOIN cursos c1 ON c1.sigla = inscricao2013_2.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2013_2.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2013_2.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2013_2.curso2_turno LIMIT $inicio,$limite";
$resultRecords = mysql_query($queryRecords, $conexao) or die (mysql_error());

$consulta = mysql_query("SELECT id FROM inscricao2013_2", $conexao);
$total_registros = mysql_num_rows($consulta);
$total_paginas = ceil($total_registros / $limite);	/* Define o total de páginas a serem mostradas baseada
na divisão do total de registros pelo limite de registros a serem mostrados */

?>	
<div class="container">
	
	<div class="well">
		<h1>Inscrições <small>Relatórios</small></h1>
	</div>	

		<div class="row">
			<div class="span4">Número de inscritos até o momento:</div>
			<div class="span8"><?php echo $total_registros; ?></div>
		</div><!-- /row -->

		<hr />

		<table class="table table-striped table-bordered" >
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>Curso 1</th>
					<th>Turno</th>
					<th>Curso 2</th>
					<th>Turno</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($dados = mysql_fetch_array($resultRecords)) : ?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['curso1']; ?></td>
					<td><?php echo $dados['turno1']; ?></td>
					<td><?php echo $dados['curso2']; ?></td>
					<td><?php echo $dados['turno2']; ?></td>
				</tr>			
			<?php endwhile; ?>
			</tbody>
		</table>

		<div class="pagination">
			<ul>
		<?php 

			echo "<li><a href='?pag=1'>&laquo;</a></li>";

			for($i=1; $i <= $total_paginas; $i++) {
				if( $pagina == $i ) {
					echo "<li class='active'><a href='#'>".$i."</a></li>"; //escreve somente o numero da página
				}
				else {
					echo "<li><a href='?pag=".$i."'> ".$i." </a></li>";
				}
			} 

			echo "<li><a href='?pag=".$total_paginas."'>»</a></li>";
		?>
			</ul>
		</div>


	</div>

<?php include_once('footer.php'); ?>