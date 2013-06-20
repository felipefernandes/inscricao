<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<title>Praça do Conhecimento - Inscrição 2013.1</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
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
          <a class="brand" href="#">Praça do Conhecimento - Inscrições 2013.1</a>
        </div>
      </div>
    </div>

    <div class="container">
    	<h1>Inscrições 2013.1</h1>
    	<h4>Preencha com atenção todos os itens e em seguida imprima a confirmação
    	 de matrícula no seu email.</h4>
    	<p>Em caso de dúvidas, entre em contato através do Fale Conosco do site, 
    	 ou diretamente com os monitores na Praça do Conhecimento.</p>

    	 <hr>

    	 <form id="formularioInscricao" name="formularioInscricao" method="GET" action="envia.php">
    	 	<div id="escolhaCurso">
	    	 	<h3>Qual curso?</h3>
	    	 	<p>Você poderá escolher até duas opções de curso. A segunda opção poderá ser atendida 
	    	 		caso você não tenha sido sorteado para sua primeira opção e ainda restarem vagas 
	    	 		no curso escolhido por você em segunda opção.</p>

	    	 	<label>1ª Opção:</label>
	    	 	<select id="curso_1opcao" required>
	    	 		<option value=""></option>
	    	 		<option value="AD">Áudio Digital</option>
	    	 		<option value="CG">Computação Gráfica</option>
	    	 		<option value="DG">Design Gráfico</option>
	    	 		<option value="FT">Fotografia</option>
	    	 		<option value="VI">Vídeo</option>
	    	 		<option value="IB">Informática Básica</option>
	    	 		<option value="TI">Tecnologia da Informação</option>
	    	 		<option value="WD">Web Design</option>
	    	 	</select>

	    	 	<div id="turno1" style="display:none;">
		    	 	<label>Turno:</label>
		    	 	<select id="curso_1opcao_turno" required>
		    	 	</select>
	    	 	</div>

	    	 	<label>2ª Opção:</label>
	    	 	<select id="curso_2opcao" required>
	    	 		<option value=""></option>
	    	 		<option value="AD">Áudio Digital</option>
	    	 		<option value="CG">Computação Gráfica</option>
	    	 		<option value="DG">Design Gráfico</option>
	    	 		<option value="FT">Fotografia</option>
	    	 		<option value="VI">Vídeo</option>
	    	 		<option value="IB">Informática Básica</option>
	    	 		<option value="TI">Tecnologia da Informação</option>
	    	 		<option value="WD">Web Design</option>
	    	 	</select>

	    	 	<div id="turno2" style="display:none;">
		    	 	<label>Turno:</label>
		    	 	<select id="curso_2opcao_turno" required>
		    	 	</select>
	    	 	</div>    	 	
			</div><!-- /escolhaCurso -->

    	 	<hr>

    	 	<div id="dadosPessoais">

    	 		<h3>Dados Pessoais</h3>
    	 		
    	 		<input id="nome" class="input-xxlarge" type="text" placeholder="Nome completo" required /><br>
    	 		<input id="dt_nasc" class="input-large" type="text" placeholder="Data de nascimento" required /><span class="help-inline">Ex. dd/mm/aaaa</span><br>

    	 		<!-- //se menor de idade - idade menor que 18 -->
    	 		<div id="responsavel" class="hide" style="display:none;">
					<input id="nome_responsavel" class="input-xxlarge" type="text" placeholder="Nome do responsável" required /><br>
    	 		</div>    	 

    	 		<select id="sexo" required>
    	 			<option value="">Sexo</option>
    	 			<option value="M">Masculino</option>
    	 			<option value="F">Feminio</option>
    	 		</select><br>

    	 		<input id='estado_civil' class="input-large" type="text" placeholder="Estado civil"><span class="help-inline">Ex. solteiro, casado, divorciado, viúvo...</span><br>

    	 		<input id='endereco' class="input-xxlarge" type="text" placeholder="Endereço" required><br>

    	 		<input id='bairro' class="input-xlarge" type="text" placeholder="Bairro" required><br>

    	 		<input id='cep' class="input-medium" type="text" placeholder="CEP" required><span class="help-inline">Digite apenas os números</span><br>

    	 		<input id='comunidade' class="input-xlarge" type="text" placeholder="Comunidade"><br>

    	 		<h4>Contatos:</h4>

				<input id='email' class="input-medium" type="text" placeholder="E-mail" required><span class="help-inline">Ex. nome@email.com.br</span><br>

    	 		<input id='tel_fixo' class="input-medium" type="text" placeholder="Telefone fixo" required><span class="help-inline">Digite apenas os números</span><br>

    	 		<input id='tel_cel' class="input-medium" type="text" placeholder="Celular" required><span class="help-inline">Digite apenas os números</span><br>

    	 		<input id='tel_recado' class="input-medium" type="text" placeholder="Recados com..."><br>
    	 	

    	 	</div><!-- /dadosPessoais -->

			<hr>

			<div id="escolaridade">

				<h3>Escolaridade</h3>

				<select id="escolaridade_periodo" required>
					<option value="">Período</option>
					<option value="fund_1">Cursando o 1º ano do ensio fundamental</option>
					<option value="fund_2">Cursando o 2º ano do ensio fundamental</option>
					<option value="fund_3">Cursando o 3º ano do ensio fundamental</option>
					<option value="fund_4">Cursando o 4º ano do ensio fundamental</option>
					<option value="fund_5">Cursando o 5º ano do ensio fundamental</option>
					<option value="fund_6">Cursando o 6º ano do ensio fundamental</option>
					<option value="fund_7">Cursando o 7º ano do ensio fundamental</option>
					<option value="fund_8">Cursando o 8º ano do ensio fundamental</option>
					<option value="fund_9">Cursando o 9º ano do ensio fundamental</option>
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
					<input id="instituicao_nome" class="input-xxlarge" type="text" placeholder="Escola ou Faculdade onde estuda" required><br>
					<select id="aulas_horarios" required>
						<option value="">Turno</option>
						<option value="1">Manhã</option>
						<option value="2">Tarde</option>
						<option value="3">Noite</option>
					</select>
				</div><!-- /onde e quando estuda -->

			</div><!-- /escolaridade -->

			<hr>

			<div id="conhecimentos">

				<h3>Sobre o projeto</h3>

				<p>
				<label>Como ficou sabendo dos cursos da Praça do Conhecimento?</label>
				<select id="comunicacao" required>
					<option value=""></option>
					<option value="1">Internet</option>
					<option value="2">Amigos/Familiares</option>
					<option value="3">Escola</option>
					<option value="4">TV</option>
					<option value="5">Revista</option>
					<option value="6">Jornal</option>
					<option value="7">Associação de moradores</option>
					<option value="8">Outro meio...</option>
				</select><br>
				<div id="comunicacao_outro" style="display:none;">
					<input id="comunicacao_outro_opt" class="input-xxlarge" type="text" placeholder="Digite o nome de onde soube da Praça do Conhecimento" required><br>
				</div>
				</p>

				<p>
				<label>Qual o principal motivo de você estar se inscrevendo em um dos cursos da Praça do Conhecimento?</label>
				<select id="motivo" multiple="multiple" required>
					<option value="1">Estou com tempo livre</option>
					<option value="2">Gostei do projeto</option>
					<option value="3">Preciso arrumar um emprego</option>
					<option value="4">Quero aprender coisas novas</option>
					<option value="4">Meus pais ou outras pessoas pediram para eu me inscrever</option>
				</select>
				<span class="help-inline"><small>Dica: Você pode selecionar mais de um item segurando a tecla CTRL enquanto Clica.</small></span>
				</p>

				<hr>

				<p>
				<label>Você acessa a Internet?</label>
				<select id="internet" required>
					<option value=""></option>
					<option value="0">NÃO</option>
					<option value="1">SIM</option>
				</select>
				</p>

				<p>
				<div id="internet_sim" style="display:none;">
					<label>O que você faz na Internet?</label>					
					<select id="internet_acesso" class="input-xlarge" multiple="multiple" size="13" required>
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
					</select><span class="help-inline"><small>Dica: Você pode selecionar mais de um item segurando a tecla CTRL enquanto Clica.</small></span><br>

					<div id="internet_outro" style="display:none;">
						<input id="internet_outro_opt" class="input-xxlarge" type="text" placeholder="Especifique o que mais faz na Internet" required><br>
					</div>					
				</div><!-- /internet_sim -->
				</p>

				<p>
				<div id="internet_nao" style="display:none;">
					<label>Porquê não acessa?</label>
					<textarea id="internet_nao_motivo" class="input-xxlarge" required></textarea>
				</div>
				</p>
			</div><!-- /conhecimentos -->
		
			<hr>

			<div id="conhecimentos_especificos">

				<h3>Conhecimentos</h3>

				<div id="conhecimentos_informatica">
					<label>O que você conhece ou faz usando computadores?</label>
					<select id="conhecimentos_info" class="input-xxlarge" multiple="multiple" size="9" required>
						<option value="1">Editor de textos (ex.: Word, BrOffice)</option>
						<option value="2">Navegador (ex.: Internet Explorer, Firefox)</option>
						<option value="3">Editor de imagens (ex.: Photoshop, Gimp)</option>
						<option value="4">Editor de vídeos (ex.: MovieMaker, Cinelera, Adobe Premiere)</option>
						<option value="5">Editor de apresentações (ex. PowerPoint, Impress)</option>
						<option value="6">Editor de planilhas (ex.: Excel, BrOffice)</option>						
						<option value="7">Instala computadores ou faz manutenção?</option>
						<option value="8">Tem ou participa de blog ou site?</option>						
						<option value="9">Outro...</option>
					</select><span class="help-inline"><small>Dica: Você pode selecionar mais de um item segurando a tecla CTRL enquanto Clica.</small></span><br>
					<div id="conhecimentos_info_outro" style="display:none;">
						<input id="conhecimentos_info_opt_outro" class="input-xxlarge" type="text" placeholder="Especifique o que mais faz" required><br>
					</div>							
				</div>

			</div><!-- /conhecimentos_especificos -->

			<hr>

			<div class="social">
				
				<h3>Atividade Social</h3>

				<label>Você participa de alguma atividade comunitária?</label>
				<select id="atividade_social" required>
					<option value=""></option>
					<option value="1">Atualmente participo</option>
					<option value="2">Já participei, mas atualmente não participo mais</option>
					<option value="3">Nunca participei</option>
				</select>
				<div id="atividade_social_nome" style="display:none;">
					<input id="atividade_social_opt_nome" class="input-xxlarge" type="text" placeholder="Qual?" required><br>
				</div>	

			</div><!-- /social -->

			<hr>

			<div id="expectativa_pessoal">
				<label>O que você espera aprender no curso escolhido?</label>
				<textarea id="expectativa" class="input-xxlarge" required></textarea><br>
				<small>(Ainda restam 300 caracteres)</small>

			</div><!-- /expectativa -->


			<div class="form-actions">							
			  	<button type="submit" class="btn btn-primary pull-right" style="margin-left:5px;">Enviar inscrição</button>			  
			  	<button type="button" class="btn pull-right">Cancelar</button>
			</div>

    	 </form>
    </div>



	<!-- javascripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>

</html>