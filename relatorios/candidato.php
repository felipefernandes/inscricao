<?php include_once('header.php'); ?>

<?php 

$candidato_id = (isset($_GET['id'])) ? $_GET['id'] : '0';

$queryRecords = "SELECT inscricao2014_1.*, c1.curso AS 'curso1', t1.turno AS 'turno1', c2.curso AS 'curso2', t2.turno AS 'turno2', escolaridade_niveis.descricao AS 'escolaridade_descricao' FROM `inscricao2014_1` LEFT JOIN cursos c1 ON c1.sigla = inscricao2014_1.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2014_1.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2014_1.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2014_1.curso2_turno LEFT JOIN escolaridade_niveis ON inscricao2014_1.escolaridade_nivel = escolaridade_niveis.cod WHERE inscricao2014_1.id = $candidato_id";
$resultRecords = mysql_query($queryRecords, $conexao) or die (mysql_error());

?>	

<div class="container">
	
	<?php while ($dados = mysql_fetch_array($resultRecords)) : ?>

	<div class="well">
		<h1>Inscrições <small>candidato #<i><?php echo $candidato_id; ?></i></small></h1>
	</div>	

	<div class="row">
		<div class="span4 offset8">
			<div class="pull-right">
				<a href="#" class="btn" onclick="history.go(-1); return false;"><i class="icon-backward"></i> voltar para listagem</a>
			</div>
		</div>
		<hr>
	</div>

	<div class="row">
		<div class="span12">
			<h2><?php echo $dados['nome']; ?></h2>
			<hr>
		</div>	
	</div><!-- row -->	
	<div class="row">
		<div class="span12">
			<h3>Cursos escolhidos:</h3>
			<strong>1º Opção:</strong> <?php echo $dados['curso1']; ?><br>
			<strong>2º Opção:</strong> <?php echo $dados['curso2']; ?><br>
			<br>
			<h3>O que você espera aprender no curso de <?php echo $dados['curso1']; ?>?</h3>
			<i><?php echo $dados['expectativa']; ?></i>
		</div>		
	</div><!-- row -->
	<div class="row">
		<div class="span12">
			<hr>
			<h3>Dados pessoais</h3>
			<strong>Data de nascimento:</strong> <?php echo $dados['nasc']; ?><br>
			<strong>Idade:</strong> <?php echo calcula_idade($dados['nasc']); ?> anos<br>
			<strong>Sexo:</strong> <?php echo ($dados['sexo'] == "M") ? "Masculino" : "Feminino"; ?><br>
			<strong>Endereço:</strong> <?php echo $dados['endereco']; ?><br>
			<strong>Bairro:</strong> <?php echo $dados['bairro']; ?><br>
			<strong>CEP:</strong> <?php echo format_cep($dados['cep']); ?><br>
			<?php if ($dados['comunidade'] != ""): ?>
			<strong>Comunidade:</strong> <?php echo $dados['comunidade']; ?><br>
			<?php endif; ?>

			<hr>
			<h3>Contatos:</h3>
			<strong>E-mail:</strong> <?php echo $dados['email']; ?><br>
			<strong>Telefone fixo:</strong> <?php echo format_phone($dados['tel_fixo']); ?><br>
			<strong>Celular:</strong> <?php echo format_phone($dados['tel_cel']); ?><br>
			<?php if ($dados['tel_recado'] != ""): ?>
			<strong>Recados com...:</strong> <?php echo format_phone($dados['tel_recado']); ?><br>
			<?php endif; ?>

			<hr>
			<h3>Escolaridade</h3>
			<strong>Nivel:</strong> <?php echo $dados['escolaridade_descricao']; ?><br>

			<hr>
			<h3>Conhecimentos</h3>
			<strong>Acesso a Internet:</strong> <?php echo ($dados['internet'] == 0) ? "Não possui" : "Possui"; ?><br>
			<?php if ($dados['internet'] != 0): ?>
			<strong>Uso da Internet:</strong> <?php echo $dados['internet_acesso']; ?><br> 
			<?php endif; ?>
			<br>
			<?php if ($dados['conhecimentos_info'] != ""): ?>
			<strong>O que você conhece ou faz usando computadores?: </strong><br>
			<?php echo $dados['conhecimentos_info']; ?>
			<?php endif; ?>

		</div>
	</div><!-- /row -->

	<hr />

	<?php endwhile; ?>

	<div class="row">
		<div class="span4 offset8">
			<div class="pull-right">
				<a href="#" class="btn" onclick="history.go(-1); return false;"><i class="icon-backward"></i> voltar para listagem</a>
			</div>
		</div>
		<hr>
	</div>

</div>

<?php include_once('footer.php'); ?>