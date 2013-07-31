<?php include_once('header.php'); ?>	

<?php 
// Registros
$ID = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0; //pega o valor da url

$queryRecords = "SELECT inscricao2013_2.id, c1.curso AS 'curso1', t1.turno AS 'turno1', c2.curso AS 'curso2', t2.turno AS 'turno2', escolaridade_niveis.descricao AS 'escolaridade', internet_usos.descricao AS 'internet_uso_descr', conhecimentos.descricao AS 'conhecimentos', inscricao2013_2.* FROM `inscricao2013_2` LEFT JOIN cursos c1 ON c1.sigla = inscricao2013_2.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2013_2.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2013_2.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2013_2.curso2_turno LEFT JOIN escolaridade_niveis ON escolaridade_niveis.cod = inscricao2013_2.escolaridade_nivel LEFT JOIN internet_usos ON internet_usos.id = inscricao2013_2.internet_acesso LEFT JOIN conhecimentos ON conhecimentos.id = inscricao2013_2.conhecimentos_info WHERE inscricao2013_2.id = '". $ID ."';";
$resultRecords = mysql_query($queryRecords, $conexao) or die (mysql_error());

$total_registros = mysql_num_rows($resultRecords);

?>	
<div class="container" style="position:relative;">
	
	<div class="well hidden-print">
		<h1>Inscrições <small>Relatórios (busca)</small></h1>
	</div>	

	<?php if ( $total_registros == 0 ) : ?>

		<h4>Nenhum registro encontrado.</h4>

	<?php else: ?>

		<?php while ($dados = mysql_fetch_array($resultRecords)) : ?>

		<div class="popup well well-small">
			Sorteado? <a href="#" id="sorteado_sim" class="btn btn-small">SIM</a> <a href="#" id="sorteado_nao" class="btn btn-small">NÃO</a>
		</div>


		<div class="ficha">
			<h3 style="margin-bottom:30px;"><?php echo $dados['nome']; ?> <small>(#<?php echo $dados['id']; ?>)</small></h3>

			<div class="well well-small">
				<div class="curso_opcao">
					<strong>1º Opção:</strong> <?php echo $dados['curso1']; ?> - <?php echo $dados['turno1']; ?>
				</div>
				<div class="curso_opcao">
					<small><strong>2º Opção:</strong> <?php echo $dados['curso2']; ?> - <?php echo $dados['turno2']; ?></small>
				</div>
			</div>

			<h4>Motivação:</h4>
			<?php echo $dados['expectativa']; ?>

			<hr />

			<h4>Contatos:</h4>
			<strong>Endereço:</strong> <br>
			<p><?php echo $dados['endereco']; ?> <br>
			<?php echo $dados['bairro']; ?> / <?php echo $dados['comunidade']; ?> - (CEP) <?php echo $dados['cep']; ?></p>
			<?php if ( $dados['tel_fixo'] != "0" ) { echo "<strong>Telefone: </strong>" . $dados['tel_fixo']; } ?><br>
			<?php if ( $dados['tel_cel'] != "" ) { echo "<strong>Celular: </strong>" . $dados['tel_cel']; } ?><br>
			<?php if ( $dados['tel_recado'] != "" ) { echo "<strong>Recados com: </strong>" . $dados['tel_recado']; } ?>

			<hr />

			<h4>Escolaridade:</h4>
			<strong>Nível: </strong> <?php echo $dados['escolaridade']; ?> <br>
			<strong>Turno: </strong> 
			<?php 
			switch ( $dados['aulas_horarios'] ) {
				case '1': echo "Manhã"; break;
				case '2': echo "Tarde"; break;
				case '3': echo "Noite"; break;
			} ; ?>
			<hr />

			<h4>Conhecimentos:</h4>
			<?php if ( $dados['internet'] != 0 ): ?>
			<strong>Internet: </strong>SIM <br>
			<strong>O uso mais comum da internet é para: </strong><?php echo $dados['internet_uso_descr']; ?><br>
			<?php else: ?>
			<strong>Internet: </strong>NÃO <br>
			<?php endif; ?>
			<?php if ( $dados['conhecimentos'] != "" ): ?>
			<strong>Também utiliza o computador: </strong><?php echo $dados['conhecimentos']; ?>
			<?php else: ?>
			Não possui conhecimentos no computador.
			<?php endif; ?>

		</div><!-- /ficha -->

		<?php endwhile; ?>

	<?php endif; ?>		

	</div>

	<script type="text/javascript">
	$(document).ready(function() {

		/* Verificacao se Status inicial */
		$.ajax({
			url: 'api.php',										//onde sera processado
			data: "id=<?php echo $ID; ?>&acao=check&code=0",	//parametros para processamento

			dataType: 'json',
			success: function(data) {
				var result = data;
				if (result == true) { //se não sorteado
					$('#sorteado_nao').addClass('btn-danger');
					$('#sorteado_sim').removeClass('btn-success');
				} 
				else {
					$('#sorteado_nao').removeClass('btn-danger');
					$('#sorteado_sim').addClass('btn-success');
				}				
			}
		});

		$('#sorteado_sim').click(function () {
			$(this).toggleClass('btn-success');		
			$('#sorteado_nao').toggleClass('btn-danger');
			setInscricaoStatus(1);
		});

		$('#sorteado_nao').click(function () {
			$(this).toggleClass('btn-danger');
			$('#sorteado_sim').toggleClass('btn-success');
			setInscricaoStatus(0);
		});	


		function setInscricaoStatus(status)	{			
			$.ajax({
				url: 'api.php',											//onde sera processado
				data: "id=<?php echo $ID; ?>&acao=set&code=" + status,	//parametros para processamento

				dataType: 'json',
				success: function(data) {
					var result = data;
					if (result == false) { //se não sorteado
						alert("Ocorreu algum erro.");
					}				
				}
			});			
		}
		
	});
	</script>

<?php include_once('footer.php'); ?>