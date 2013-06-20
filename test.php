<?php

/* Conexao com o DB */
$conexao = mysql_connect("localhost","praca803_admin","aula9021@"); //essa linha irá fazer a conexão com o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());//aqui irei testar se houve falha de conexão

//conectando com a tabela do banco de dados
$banco = mysql_select_db("praca803_inscricoes", $conexao); //nome da tabela onde os dados serão armazenados


?>