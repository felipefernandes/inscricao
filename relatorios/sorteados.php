<?php include_once('header.php'); ?>	

<?php 
// Registros
$cursoID = ( isset( $_GET['c'] ) ) ? $_GET['c'] : 0; //pega o valor da url

if ( 0 != $cursoID ) : //se hover um curso valido

$qCurso = mysql_query("SELECT * FROM cursos WHERE id = $cursoID", $conexao) or die (mysql_error());
$rCurso = mysql_fetch_array( $qCurso );

$cursoNome = $rCurso[1];
$cursoSigla = $rCurso[2];

$limite = 50; // define o numero de registros a serem exibidos
$pagina = ( isset( $_GET['pag'] ) ) ? $_GET['pag'] : 1; //pega o valor da url
$inicio = ($pagina * $limite) - $limite; // 1 * 50 - 50 = 0 => inicio: 0,50

$queryRecords = "SELECT inscricao2014_1.id, c1.curso AS 'curso1', t1.turno AS 'turno1', c2.curso AS 'curso2', t2.turno AS 'turno2', inscricao2014_1.nome, email, tel_fixo, tel_cel, tel_recado FROM `inscricao2014_1` LEFT JOIN cursos c1 ON c1.sigla = inscricao2014_1.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2014_1.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2014_1.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2014_1.curso2_turno WHERE curso1 = '$cursoSigla' AND ativo = 1 LIMIT $inicio,$limite";
$resultRecords = mysql_query($queryRecords, $conexao) or die (mysql_error());

$consulta = mysql_query("SELECT id FROM inscricao2014_1 WHERE curso1 = '$cursoSigla' AND ativo = 1", $conexao);
$total_registros = mysql_num_rows($consulta);
$total_paginas = ceil($total_registros / $limite);	/* Define o total de páginas a serem mostradas baseada
na divisão do total de registros pelo limite de registros a serem mostrados */

//Relação de turnos do curso escolhido
$turnosCurso = mysql_query("SELECT turnos.id, turnos.turno FROM  `cursos_turnos` INNER JOIN  `cursos` ON cursos.id = cursos_turnos.id_curso INNER JOIN  `turnos` ON turnos.id = cursos_turnos.id_turno WHERE cursos.sigla = '$cursoSigla'", $conexao) or die (mysql_error());


?>	
<div class="container">
	
	<div class="well">
		<h1>Inscrições <small>( Lista de sorteados: <?php echo $cursoNome; ?> )</small></h1>
	</div>	

		<ul class="nav nav-pills" id="myTab">
		  <li><a href="#geral" data-toggle="pill">Geral</a></li>

		  <?php 
		  	$arrTurnoID = array(); //guarda os turnos disponíveis
		  	$index = 0;

		  	while ( $turnos = mysql_fetch_array($turnosCurso) ) :
		  		$arrTurnoID[$index] = $turnos['id'];
		  ?>
		  <li><a href="#turno_<?php echo $index; ?>" data-toggle="pill"><?php echo $turnos['turno']; ?></a></li>
		  <?php 
		  	$index++;		  	
		  	endwhile;
		  ?>
		</ul>

		<div class="tab-content">

		<div class="tab-pane active" id="geral">

			<table class="table table-striped table-bordered" >
				<thead>
					<tr>
						<th>#</th>
						<th>Nome:</th>
						<th>Turno</th>
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
						<td><?php echo $dados['turno1']; ?></td>
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

				echo "<li><a href='?c=".$cursoID."&pag=1'>&laquo;</a></li>";

				for($i=1; $i <= $total_paginas; $i++) {
					if( $pagina == $i ) {
						echo "<li class='active'><a href='#'>".$i."</a></li>"; //escreve somente o numero da página
					}
					else {
						echo "<li><a href='?c=".$cursoID."&pag=".$i."'> ".$i." </a></li>";
					}
				} 

				echo "<li><a href='?c=".$cursoID."&pag=".$total_paginas."'>»</a></li>";
			?>
				</ul>
			</div>

		</div><!-- /tab_pane -->

		<?php 
			$turnoID = 0;
			$qdeTurnos = count($arrTurnoID);

			for ( $i=0; $i < $qdeTurnos; $i++ ) : 
				$turnoID = intval($arrTurnoID[$i]); //guarda o ID do turno pra consulta
				$queryTurnoCurso = "SELECT inscricao2014_1.id, c1.curso AS  'curso1', t1.turno AS  'turno1', c2.curso AS  'curso2', t2.turno AS  'turno2', inscricao2014_1.nome, email, tel_fixo, tel_cel, tel_recado FROM  `inscricao2014_1` LEFT JOIN cursos c1 ON c1.sigla = inscricao2014_1.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2014_1.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2014_1.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2014_1.curso2_turno WHERE curso1 = '$cursoSigla' AND t1.id = $turnoID  AND ativo = 1 ORDER BY inscricao2014_1.nome ASC";
				$resultTurnoCurso = mysql_query($queryTurnoCurso, $conexao) or die (mysql_error());
		?>

		<div class="tab-pane" id="turno_<?php echo $i; ?>">

			<table class="table table-striped table-bordered" >
				<thead>
					<tr>
						<th>#</th>
						<th>Nome:</th>
						<th>E-mail</th>
						<th>Telefone</th>
						<th>Celular</th>
						<th>Recados</th>
					</tr>
				</thead>
				<tbody>
				<?php while ($lista = mysql_fetch_array($resultTurnoCurso)): ?>
					<tr>
						<td><?php echo $lista['id']; ?></td>
						<td><?php echo $lista['nome']; ?></td>
						<td style="text-transform:lowercase"><?php echo $lista['email']; ?></td>
						<td><?php echo ($lista['tel_fixo'] != 0) ? $lista['tel_fixo'] : ""; ?></td>
						<td><?php echo ($lista['tel_cel'] != 0) ? $lista['tel_cel'] : ""; ?></td>
						<td><?php echo ($lista['tel_recado'] != 0) ? $lista['tel_recado'] : ""; ?></td>
					</tr>			
				<?php endwhile; ?>
				</tbody>
			</table>			

		</div><!-- /turno <?php echo $i; ?> -->

		<?php endfor; ?>	

		</div><!-- /tab_content -->

</div><!-- /container -->

	<script type="text/javascript">
	$(document).ready(function() {	
	   $('#myTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		});
		$('#myTab a:first').click();
	  });
	</script>

<?php endif; ?>

<?php include_once('footer.php'); ?>