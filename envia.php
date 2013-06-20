<?php include_once('global.php'); ?>
<?php 

$curso1 		= $_POST["curso_1opcao"];
$curso1_turno 	= $_POST["curso_1opcao_turno"];
$curso2 		= $_POST["curso_2opcao"];
$curso2_turno 	= $_POST["curso_2opcao_turno"];

$nome 			= $_POST["nome"];
$nasc 			= $_POST["dt_nasc"];
$responsavel 	= $_POST["nome_responsavel"];
$sexo 			= $_POST["sexo"];
$estado_civil 	= $_POST["estado_civil"];
$endereco 		= $_POST["endereco"];
$bairro			= $_POST["bairro"];
$cep			= $_POST["cep"];
$comunidade		= $_POST["comunidade"];

$email 			= $_POST["email"];
$tel_fixo		= $_POST["tel_fixo"];
$tel_cel		= $_POST["tel_cel"];
$tel_recado		= $_POST["tel_recado"];

$escolaridade_nivel = $_POST["escolaridade_periodo"];
$instituicao_nome	= $_POST["instituicao_nome"];
$aulas_horarios		= $_POST["aulas_horarios"];

$comunicacao			= $_POST["comunicacao"];
$comunicacao_outro_opt	= $_POST["comunicacao_outro_opt"];

$motivacao			 = $_POST["motivo"];

$internet			 = $_POST["internet"];
if(isset($_POST['internet_acesso'])){ $internet_acesso = $_POST['internet_acesso']; } else { $internet_acesso = "0"; } 
$internet_outro_opt	 = $_POST["internet_outro_opt"];
$internet_nao_motivo = $_POST["internet_nao_motivo"];

$conhecimentos_info  			= $_POST["conhecimentos_info"];
$conhecimentos_info_opt_outro	= $_POST["conhecimentos_info_opt_outro"];

$atividade_social 			= $_POST["atividade_social"];
$atividade_social_opt_nome	= $_POST["atividade_social_opt_nome"];

$expectativa	= $_POST["expectativa"];

/* Conexao com o DB */
header('Content-Type: text/html; charset=utf-8');
$conexao = mysql_connect("localhost","praca803_admin","aula9021@"); //essa linha irá fazer a conexão com o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());//aqui irei testar se houve falha de conexão

//conectando com a tabela do banco de dados
$banco = mysql_select_db("praca803_inscricoes",$conexao); //nome da tabela onde os dados serão armazenados

mysql_query("SET NAMES 'utf8'");
mysql_select_db("praca803_inscricoes");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `$inscricao_tabela` ( `curso1` ,`curso1_turno` ,`curso2` ,`curso2_turno` ,`nome` ,`nasc` ,`responsavel` ,`sexo` ,`estado_civil` ,`endereco` ,`bairro` ,`cep` ,`comunidade` ,`email` ,`tel_fixo` ,`tel_cel` ,`tel_recado` ,`escolaridade_nivel` ,`instituicao_nome` ,`aulas_horarios` ,`comunicacao` ,`comunicacao_outro` ,`motivacao` ,`internet` ,`internet_acesso` ,`internet_acesso_outro` ,`internet_acesso_nao_motivo` ,`conhecimentos_info` ,`conhecimentos_info_outro` ,`atividade_social` ,`atividade_social_nome` ,`expectativa` ) 
VALUES ( '$curso1', '$curso1_turno', '$curso2', '$curso2_turno', '$nome', '$nasc', '$responsavel', '$sexo', '$estado_civil', '$endereco', '$bairro', '$cep', '$comunidade', '$email', '$tel_fixo', '$tel_cel', '$tel_recado', '$escolaridade_nivel', '$instituicao_nome', '$aulas_horarios', '$comunicacao', '$comunicacao_outro_opt', '$motivacao', '$internet', '$internet_acesso', '$internet_outro_opt', '$internet_nao_motivo', '$conhecimentos_info', '$conhecimentos_info_opt_outro', '$atividade_social', '$atividade_social_opt_nome', '$expectativa')";
mysql_query($query, $conexao);

//echo $query;

//$query = nome da variável que utilizarei para realizar a operação de inserção dos dados
//inscricao2013 = nome da tabela que será salvo os dados do cadastro
//São apenas os nomes dos campos que constam na tabela inscricao2013.
//VALUES = indica que serão inseridos os seguintes valores.

$queryLastItem = "SELECT * FROM ". $inscricao_tabela ." ORDER BY ID DESC LIMIT 1";
$result = mysql_query($queryLastItem, $conexao) or die(mysql_error());
$idUser = "";
//session_start(); //adiciona a identificação da sessão um número único

while ($dados = mysql_fetch_array($result)) 
{ 
  $idUser = $dados['id']; 
}

//abre a página de confirmacao
?>
<form id="formpost" method="post" action="confirmacao.php">
	<input type="hidden" name="uid" value="<?php echo $idUser ?>" />
	<input type="hidden" name="uname" value="<?php echo $nome ?>" />
	<input type="hidden" name="c1" value="<?php echo $curso1 ?>" />
	<input type="hidden" name="c1t" value="<?php echo $curso1_turno ?>" />
	<input type="hidden" name="c2" value="<?php echo $curso2 ?>" />
	<input type="hidden" name="c2t" value="<?php echo $curso2_turno ?>" />
</form>
<script type="text/javascript"> document.forms["formpost"].submit(); </script>
