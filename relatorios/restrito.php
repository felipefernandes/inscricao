<?php 

$usuario = "admin";
$senha = "alemao9021@";

function erro() {
	//cabecalhos
	header('WWW-Authenticate: Basic realm="Administracao"'); 
	header('HTTP/1.0 401 Unauthorized'); 

?>
<!DOCTYPE html>
<html>
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div class="container" style="padding-top:30px;">
			<div class="well"><h1>Voce não tem permissão para acessar essa área</h1></div>
		</div>
		<!-- javascripts -->		
		<script type="text/javascript" src="../js/bootstrap.js"></script>		
	</body>
</html>
<?php

	exit;
}

// Se as informações não foram setadas 
if (!isset($_SERVER['PHP_AUTH_USER']) or !isset($_SERVER['PHP_AUTH_PW'])) { 
	erro(); 
} 
else { 
	// Se os dados informados forem diferentes dos definidos 
	if ($_SERVER['PHP_AUTH_USER'] != $usuario or $_SERVER['PHP_AUTH_PW'] != $senha) { 
		erro(); 
	} 
}



?>