<?php include_once('global.php'); ?>
<?php

$idUser         = $_REQUEST['uid'];
$nome           = $_REQUEST["uname"];
$curso1         = $_REQUEST["c1"];
$curso1_turno   = $_REQUEST["c1t"];
$curso2         = $_REQUEST["c2"];
$curso2_turno   = $_REQUEST["c2t"];

switch ($curso1) {
  case 'AD': $curso1 = "Áudio Digital"; break;
  case 'CG': $curso1 = "Computação Gráfica"; break;
  case 'DG': $curso1 = "Design Gráfico"; break;
  case 'FT': $curso1 = "Fotografia"; break;
  case 'IB': $curso1 = "Informática Básica"; break;
  case 'TI': $curso1 = "Tecnologia da Informação"; break;
  case 'VI': $curso1 = "Vídeo"; break;  
  case 'WD': $curso1 = "Web Design"; break;
}

switch ($curso2) {
  case 'AD': $curso2 = "Áudio Digital"; break;
  case 'CG': $curso2 = "Computação Gráfica"; break;
  case 'DG': $curso2 = "Design Gráfico"; break;
  case 'FT': $curso2 = "Fotografia"; break;
  case 'IB': $curso2 = "Informática Básica"; break;
  case 'TI': $curso2 = "Tecnologia da Informação"; break;
  case 'VI': $curso2 = "Vídeo"; break;  
  case 'WD': $curso2 = "Web Design"; break;
}

switch ($curso1_turno) {
  case '1': $curso1_turno = "Manhã (8h30 às 12h) - 3ª e 5ª feiras"; break;
  case '2': $curso1_turno = "Tarde (14h às 17h30) - 3ª e 5ª feiras"; break;
  case '3': $curso1_turno = "Noite (18h às 20h30) - 4ª e 6ª feiras"; break;
  case '4': $curso1_turno = "Tarde (14h às 15h30) - 4ª e 6ª feiras"; break;
  case '5': $curso1_turno = "Tarde (16h às 17h30) - 4ª e 6ª feiras"; break;
  case '6': $curso1_turno = "Manhã (10h às 11h30) - 4ª e 6ª feiras"; break;
  case '7': $curso1_turno = "Noite (18h às 19h30) - 3ª e 5ª feiras"; break;
  case '8': $curso1_turno = "Manhã (8h30 às 12h) - 4ª e 6ª feiras"; break;
  case '9': $curso1_turno = "Tarde (14h às 17h30) - 4ª e 6ª feiras"; break;
}

switch ($curso2_turno) {
  case '1': $curso2_turno = "Manhã (8h30 às 12h) - 3ª e 5ª feiras"; break;
  case '2': $curso2_turno = "Tarde (14h às 17h30) - 3ª e 5ª feiras"; break;
  case '3': $curso2_turno = "Noite (18h às 20h30) - 4ª e 6ª feiras"; break;
  case '4': $curso2_turno = "Tarde (14h às 15h30) - 4ª e 6ª feiras"; break;
  case '5': $curso2_turno = "Tarde (16h às 17h30) - 4ª e 6ª feiras"; break;
  case '6': $curso2_turno = "Manhã (10h às 11h30) - 4ª e 6ª feiras"; break;
  case '7': $curso2_turno = "Noite (18h às 19h30) - 3ª e 5ª feiras"; break;
  case '8': $curso2_turno = "Manhã (8h30 às 12h) - 4ª e 6ª feiras"; break;
  case '9': $curso2_turno = "Tarde (14h às 17h30) - 4ª e 6ª feiras"; break;
}

?>
<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf8" /> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
	<title>Praça do Conhecimento - Inscrição 2013.1</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      @media screen {
      	.onlyPrint {
      		display: none;
      	}
      }

      @media print {
		.noPrint {
		    display:none;
		}
		.onlyPrint {
			display: block;
		}
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

    <img class='pull-right' src='img/logo.png' />
    <h3 class='noPrint'>Seu cadastro foi realizado com sucesso!</h3>
    <hr class='noPrint'>
    <h1>Confirmação de inscrição</h1>
    <hr>
    <p>Número de inscrição: <b><?php echo $idUser; ?></b></p>
    <p>Nome: <b><?php echo $nome; ?></b></p>
    <p>Curso (opção 1): <b><?php echo $curso1; ?></b> (<?php echo $curso1_turno; ?>)</p>
    <p>Curso (opção 2): <b><?php echo $curso2; ?></b> (<?php echo $curso2_turno; ?>)</p>
    <hr>
    <div class="well well-large">
      <h4>Anote estas informações geradas ou imprima esta página e apresente no dia da matricula.</h4>
      <p>Em caso de dúvidas, entre em contato através do Fale Conosco do site, ou diretamente com os monitores na Praça do Conhecimento.</p>
    </div>
    <hr>
    <small>Boa Sorte!</small>

    </div><!-- /container -->

    <!-- javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>      