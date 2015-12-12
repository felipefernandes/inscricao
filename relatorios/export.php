<?php 

include_once('restrito.php');
include_once('db.php');
include_once('utils.php');

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

// Curso ID via query
$cursoID = ( isset( $_GET['c'] ) ) ? $_GET['c'] : 0; //pega o valor da url
$debug = $_GET['debug']; //pega o valor da url

$qCurso = mysql_query("SELECT * FROM cursos WHERE id = $cursoID", $conexao) or die (mysql_error());
$rCurso = mysql_fetch_array( $qCurso );

$cursoNome = $rCurso[1];
$cursoSigla = $rCurso[2];

$queryRecords = "SELECT inscricao2014_1.id, c1.curso AS 'curso1', t1.turno AS 'turno1', c2.curso AS 'curso2', t2.turno AS 'turno2', inscricao2014_1.nome FROM `inscricao2014_1` LEFT JOIN cursos c1 ON c1.sigla = inscricao2014_1.curso1 LEFT JOIN cursos c2 ON c2.sigla = inscricao2014_1.curso2 LEFT JOIN turnos t1 ON t1.id = inscricao2014_1.curso1_turno LEFT JOIN turnos t2 ON t2.id = inscricao2014_1.curso2_turno WHERE curso1 = '$cursoSigla' GROUP BY inscricao2014_1.nome ORDER BY inscricao2014_1.curso1_turno";
$resultRecords = mysql_query($queryRecords, $conexao) or die (mysql_error());

if ($debug == false || $debug == "") {

	// Determina que o arquivo é uma planilha do Excel
	header("Content-type: application/vnd.ms-excel");   

	// Força o download do arquivo
	header("Content-type: application/force-download");  

	// Seta o nome do arquivo
	header("Content-Disposition: attachment; filename=". sanitize($cursoNome) .".xls");

	header("Pragma: no-cache");

}

$count = 1; 
$html  = "";
$html .= "<table><thead><tr><th>#</th><th>Nome</th><th>Curso</th></tr></thead><tbody>";

while ($dados = mysql_fetch_array($resultRecords)) {
	$html .= "<tr>";
	$html .= "<td>". $count ."</td>";
	$html .= "<td>". $dados['nome'] ."</td>";
	$html .= "<td>". $cursoNome ." - ". $dados['turno1'] ."</td>";
	$html .= "</tr>";

	$count++; 
}

$html .= "</tbody></table>";

echo utf8_decode($html);

?>