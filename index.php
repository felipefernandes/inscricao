<?php 
/*
* 	INSCRICOES
*/

/* Definições */
$inscricao_exercicio = "2013.2";
$inscricao_status = true;
$inscricao_bd = "";


?>
<!DOCTYPE html>
<html>
<head>
<!-- 	<meta charset="utf8" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Praça do Conhecimento - Inscrição <?php echo $inscricao_exercicio; ?></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      select {
      	width: 320px;
      }
    </style>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </a>
			  <a class="brand" href="#">Praça do Conhecimento - Inscrições <?php echo $inscricao_exercicio; ?></a>
			</div>
		</div>
	</div>

	<div class="container">

		<img class='pull-right' style="" src='img/logo.png' />
		<h1 class="pull-left" style="margin-bottom:40px;">Inscrições <?php echo $inscricao_exercicio; ?></h1>

		<div class="clearfix"></div>

		<?php if ($inscricao_status): ?>

		<p>Os cursos da Praça do Conhecimento de Nova Brasília têm como objetivo a formação de jovens e adultos em linguagens multimídia e o seu desenvolvimento pessoal, social, técnico, artístico e profissional. Com exceção dos cursos de Informática Básica e TV Comunitária e Comunicação Popular, que não possui critérios de idade e escolaridade, todos os outros cursos são para maiores de 14 anos e com nível de escolaridade igual ou superior ao 9º ano do Ensino Fundamental.
		Os cursos acontecem duas vezes por semana, durante quatro meses e meio, nos dias e turnos descritos abaixo.</p>

		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>2ª e 4ª feira</th>
					<th>Turnos</th>
					<th>3ª e 5ª feiras</th>
					<th>Turnos</th>
					<th>4ª e 6ª feiras</th>
					<th>Turnos</th>	
					<th>Sábados</th>
					<th>Turnos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Informática Básica</td>
					<td>Manhã e Tarde</td>
					<td>Computação Gráfica</td>
					<td>Manhã e Tarde</td>
					<td>Design Gráfico</td>
					<td>Manhã e Tarde</td>
					<td>Vídeo</td>
					<td>Manhã e Tarde</td>
				</tr>
				<tr>
					<td></td>
					<td></td>					
					<td>Fotografia</td>
					<td>Manhã e Tarde</td>
					<td>Web Design</td>
					<td>Manhã e Tarde</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>					
					<td>Vídeo</td>
					<td>Manhã e Tarde</td>
					<td>Áudio Digital</td>
					<td>Manhã e Tarde</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>					
					<td>Tecnologia da Informação</td>
					<td>Manhã e Tarde</td>
					<td>Tecnologia da Informação</td>
					<td>Noite</td>
					<td></td>
					<td></td>
				</tr>				
				<tr>
					<td></td>
					<td></td>					
					<td>Informática Básica</td>
					<td>Noite</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>TV Comunitária e <br>Comunicação Popular</td>
					<td>Tarde</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>					
				</tr>
			</tbody>
		</table>

		<p>As vagas dos cursos serão preenchidas mediante sorteios realizados no dia <strong>24/07/2013</strong>, 
			nos horários indicados na tabela abaixo. Os sorteios serão abertos ao público.</p>

		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Cursos</th>
					<th>Horário dos cursos</th>				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Áudio Digital</td>
					<td>9h</td>
				</tr>
				<tr>
					<td>Computação Gráfica</td>
					<td>10h</td>
				</tr>
				<tr>					
					<td>Design Gráfico</td>
					<td>11h</td>
				</tr>
				<tr>					
					<td>Fotografia</td>
					<td>13h</td>
				</tr>
				<tr>					
					<td>Vídeo</td>
					<td>14h</td>
				</tr>
				<tr>					
					<td>Web Design</td>
					<td>15h</td>
				</tr>
				<tr>					
					<td>Tecnologia da Informação</td>
					<td>16h</td>
				</tr>
				<tr>					
					<td>Informática Básica</td>
					<td>17h</td>
				</tr>		
				<tr>
					<td>TV Comunitária e TV Popular</td>
					<td>17h45</td>
				</tr>		
			</tbody>
		</table>

		<p>Os nomes dos sorteados estarão disponíveis na Praça do Conhecimento de Nova Brasília e 
		em nosso site: <a href="http://www.pracadoconhecimento.com.br" target="_blank">www.pracadoconhecimento.com.br</a></p>		

		<hr>

		<div class="well well-large">
			<h4>Preencha com atenção todos os itens e em seguida anote estas informações geradas ou 
				imprima esta página e apresente no dia da matricula.</h4>

			<p>Em caso de dúvidas, entre em contato através do Fale Conosco do site, 
			 ou diretamente com os monitores na Praça do Conhecimento.</p>
		</div>

		<hr>

		<form id="formularioInscricao" name="formularioInscricao" method="POST" action="envia.php">
		 	<div id="escolhaCurso">
	    	 	<h3>Qual curso?</h3>
				<p>Você poderá escolher até duas opções de curso. A segunda opção poderá ser atendida caso 
				você não tenha sido sorteado para sua primeira opção e ainda restarem vagas no curso escolhido 
				por você em segunda opção.</p>	    	 		

	    	 	<label>1ª Opção:</label>
	    	 	<select id="curso_1opcao" name="curso_1opcao" required>
	    	 		<option value=""></option>
	    	 		<option value="AD">Áudio Digital</option>
	    	 		<option value="CG">Computação Gráfica</option>
	    	 		<option value="DG">Design Gráfico</option>
	    	 		<option value="FT">Fotografia</option>
	    	 		<option value="VI">Vídeo</option>
	    	 		<option value="IB">Informática Básica</option>
	    	 		<option value="TI">Tecnologia da Informação</option>
	    	 		<option value="TV">TV Comunitária e Comunicação Popular</option>
	    	 		<option value="WD">Web Design</option>	    	 		
	    	 	</select>

	    	 	<div id="turno1" style="display:none;">
		    	 	<label>Turno:</label>
		    	 	<select id="curso_1opcao_turno" name="curso_1opcao_turno">
		    	 	</select>
	    	 	</div>

	    	 	<label>2ª Opção:</label>
	    	 	<select id="curso_2opcao" name="curso_2opcao" required>
	    	 		<option value=""></option>
	    	 		<option value="AD">Áudio Digital</option>
	    	 		<option value="CG">Computação Gráfica</option>
	    	 		<option value="DG">Design Gráfico</option>
	    	 		<option value="FT">Fotografia</option>
	    	 		<option value="VI">Vídeo</option>
	    	 		<option value="IB">Informática Básica</option>
	    	 		<option value="TI">Tecnologia da Informação</option>
	    	 		<option value="TV">TV Comunitária e Comunicação Popular</option>
	    	 		<option value="WD">Web Design</option>
	    	 	</select>

	    	 	<div id="turno2" style="display:none;">
		    	 	<label>Turno:</label>
		    	 	<select id="curso_2opcao_turno" name="curso_2opcao_turno">
		    	 	</select>
	    	 	</div>    	 	
			</div><!-- /escolhaCurso -->

		 	<hr>

		 	<div id="dadosPessoais">

		 		<h3>Dados Pessoais</h3>
		 		
		 		<input id="nome" name="nome" class="input-xxlarge" type="text" placeholder="Nome completo" required /><br>

		 		<input id="dt_nasc" name="dt_nasc" class="input-large" type="text" placeholder="Data de nascimento" required /><span class="help-inline">Ex. dd/mm/aaaa</span><br>

		 		<!-- //se menor de idade - idade menor que 18 -->
		 		<div id="responsavel" class="hide" style="display:none;">
					<input id="nome_responsavel" name="nome_responsavel" class="input-xxlarge" type="text" placeholder="Nome do responsável" /><br>
		 		</div>    	 

		 		<select id="sexo" name="sexo" size="1" required>
		 			<option value="">Sexo</option>
		 			<option value="M">Masculino</option>
		 			<option value="F">Feminino</option>
		 		</select><br>    	 		

				<input id='endereco' name="endereco" class="input-xxlarge" type="text" placeholder="Endereço" required><br>

    	 		<input id='bairro' name="bairro" class="input-xlarge" type="text" placeholder="Bairro" required><br>

    	 		<input id='cep' name="cep" class="input-medium" type="text" placeholder="CEP" required><span class="help-inline">Digite apenas os números. Ex.: 22000100</span><br>

    	 		<input id='comunidade' name="comunidade" class="input-xlarge" type="text" placeholder="Comunidade"><br>

		 		<h4>Contatos:</h4>

				<input id='email' name="email" class="input-xlarge" type="text" placeholder="E-mail" required><span class="help-inline">Ex. nome@email.com.br</span><br>

    	 		<input id='tel_fixo' name="tel_fixo" class="input-large" type="text" placeholder="Telefone fixo" required><span class="help-inline">Digite apenas os números. Ex.: 90901010</span><br>

    	 		<input id='tel_cel' name="tel_cel" class="input-large" type="text" placeholder="Celular" required><span class="help-inline">Digite apenas os números. Ex.: 90901010</span><br>

    	 		<input id='tel_recado' name="tel_recado" class="input-large" type="text" placeholder="Recados com..."><br>
		 	

		 	</div><!-- /dadosPessoais -->

			<hr>

			<div id="escolaridade">

				<h3>Escolaridade</h3>

				<select id="escolaridade_periodo" name="escolaridade_periodo" required>
					<option value="">Período</option>
					<option value="fund_9">Cursando o 9º ano do ensino fundamental</option>
					<option value="fund_ok">Concluiu o ensino fundamental</option>
					<option value="medio_1">Cursando o 1º ano do ensino médio</option>
					<option value="medio_2">Cursando o 2º ano do ensino médio</option>
					<option value="medio_3">Cursando o 3º ano do ensino médio</option>
					<option value="medio_ok">Concluiu o ensino médio</option>
					<option value="superior_cur">Cursando o nível superior</option>
					<option value="superior_inc">Superior incompleto</option>
					<option value="superior_ok">Superior completo</option>					
				</select>

				<div id="escolaridade_sobre" style="display:none;">				
					<p>Você estuda em que turno?</p>
					<select id="aulas_horarios" name="aulas_horarios">
						<option value="1">Manhã</option>
						<option value="2">Tarde</option>
						<option value="3">Noite</option>
					</select>
				</div><!-- /onde e quando estuda -->

			</div><!-- /escolaridade -->

			<hr>

			<div id="conhecimentos">

				<p>
				<label>Você acessa a Internet?</label>
				<select id="internet" name="internet">
					<option value=""></option>
					<option value="0">NÃO</option>
					<option value="1">SIM</option>
				</select>
				</p>

				<p>
				<div id="internet_sim" style="display:none;">
					<label>O que você faz na Internet?</label>
					
					<span class="help-block"><small>Dica: Você pode selecionar mais de um item segurando a tecla CTRL enquanto Clica.</small></span>

					<select id="internet_acesso" name="internet_acesso" class="input-xlarge" multiple="multiple" size="13">
						<option value="1">Jogar</option>
						<option value="2">Pesquisar</option>
						<option value="3">Assistir filmes</option>
						<option value="4">Ouvir e/ou baixar músicas</option>
						<option value="5">Ler notícias</option>
						<option value="6">Postar vídeos, fotos ou músicas</option>
						<option value="7">Particiar de blogs</option>
						<option value="8">Bate papo/Chat</option>
						<option value="9">Namorar</option>
						<option value="10">Estudar</option>
						<option value="11">Trabalhar</option>
						<option value="12">Orkut, Facebook ou outra rede social</option>
						<option value="13">Outros</option>
					</select><br>

					<div id="internet_outro" style="display:none;">
						<input id="internet_outro_opt" name="internet_outro_opt" class="input-xxlarge" type="text" placeholder="Especifique o que mais faz na Internet"><br>
					</div>					
				</div><!-- /internet_sim -->
				</p>

			</div><!-- /conhecimentos -->
		
			<hr>

			<div id="conhecimentos_especificos">

				<h3>Conhecimentos</h3>

				<div id="conhecimentos_informatica">
					<label>O que você conhece ou faz usando computadores?</label>

					<span class="help-block"><small>Dica: Você pode selecionar mais de um item segurando a tecla CTRL enquanto Clica.</small></span>

					<select id="conhecimentos_info" name="conhecimentos_info" class="input-xxlarge" multiple="multiple" size="9">
						<option value="1">Editor de textos (ex.: Word, BrOffice)</option>
						<option value="2">Navegador (ex.: Internet Explorer, Firefox)</option>
						<option value="3">Editor de imagens (ex.: Photoshop, Gimp)</option>
						<option value="4">Editor de vídeos (ex.: MovieMaker, Cinelera, Adobe Premiere)</option>
						<option value="5">Editor de apresentações (ex. PowerPoint, Impress)</option>
						<option value="6">Editor de planilhas (ex.: Excel, BrOffice)</option>						
						<option value="7">Instala computadores ou faz manutenção?</option>
						<option value="8">Tem ou participa de blog ou site?</option>						
						<option value="9">Outro...</option>
					</select><br>
					<div id="conhecimentos_info_outro" style="display:none;">
						<input id="conhecimentos_info_opt_outro" name="conhecimentos_info_opt_outro" class="input-xxlarge" type="text" placeholder="Especifique o que mais faz"><br>
					</div>							
				</div>

			</div><!-- /conhecimentos_especificos -->

			<hr>

			<div id="expectativa_pessoal">
				<label>O que você espera aprender no curso escolhido?</label>
				<textarea id="expectativa" name="expectativa" class="input-xxlarge" required></textarea><br>
				<small>(Ainda restam 300 caracteres)</small>

			</div><!-- /expectativa -->


			<div class="form-actions">							
			  	<button type="submit" class="btn btn-primary pull-right" style="margin-left:5px;">Enviar inscrição</button>			  
			  	<button type="button" class="btn pull-right">Cancelar</button>
			</div>

		</form>


		<?php else: ?>

		<h4>Inscrições encerradas.</h4>
		<p>Para mais informações entre em contato conosco através do site, <a href="http://www.pracadoconhecimento.com.br/contato/" title="Fale Conosco">clicando aqui.</a></p>    	 

		<?php endif; ?>

    </div><!-- /container -->



	<!-- javascripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>

</html>