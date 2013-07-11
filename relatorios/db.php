<?php 

/*$host     = 'localhost';
$user 	  = 'praca803_admin';
$pass 	  = 'aula9021@';
$database = 'praca803_inscricoes';*/

$host     = 'localhost';
$user 	  = 'root';
$pass 	  = 'root';
$database = 'webpraca_inscricao';
$inscricao_tabela = "inscricao2013_2";

//conectando com a tabela do banco de dados
$conexao = mysql_connect($host, $user, $pass); 
$database = 'webpraca_inscricao';
$inscricao_tabela = "inscricao2013_2";
$banco = mysql_select_db($database, $conexao);

mysql_query("SET NAMES 'utf8'");
mysql_select_db("praca803_inscricoes");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>