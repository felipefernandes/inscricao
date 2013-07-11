<?php 
/*
* 	INSCRICOES: relatórios
*/

include_once('restrito.php');
include_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
<!-- 	<meta charset="utf8" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Praça do Conhecimento - Inscrição <?php echo $inscricao_exercicio; ?></title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        padding-bottom: 90px;
      }
      select {
      	width: 320px;
      }
    </style>
    <script type="text/JavaScript">
	<!--
	function timedRefresh(timeoutPeriod) {
		setTimeout("location.reload(true);",timeoutPeriod);
	}
	//   -->
	</script>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">    	
    	<ul class="nav">
      		<li class="active"><a href="index.php">Geral</a></li>
      		<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Curso<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php 
					$rCursos = mysql_query("SELECT * FROM cursos ORDER BY curso", $conexao) or die (mysql_error());
					while ($dados = mysql_fetch_array($rCursos)) : ?>
					<li><a href="curso.php?c=<?php echo $dados['id']; ?>"><?php echo $dados['curso']; ?></a></li>
					<?php endwhile; ?>
				</ul>
      		</li>      		
      		<li class="dropdown">
      			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Horários<b class="caret"></b></a>
      			<ul class="dropdown-menu">
					<?php 
					$rTurnos = mysql_query("SELECT * FROM turnos WHERE valido = 1 ORDER BY turno", $conexao) or die (mysql_error());
					while ($dados = mysql_fetch_array($rTurnos)) : ?>
					<li><a href="turno.php?t=<?php echo $dados['id']; ?>"><?php echo $dados['turno']; ?></a></li>
					<?php endwhile; ?>
      			</ul>
      		</li>
      		<li class="disabled"><a href="#">Completo</a></li>
    	</ul>
  	</div>
</div>

