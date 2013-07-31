<?php 
/**
 *	Api para fazer checar estados dos inscritos
 *
 */

include_once('restrito.php');
include_once('db.php');

function object_to_array($obj) {
        $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
        foreach ($_arr as $key => $val) {
                $val = (is_array($val) || is_object($val)) ? object_to_array($val) : $val;
                $arr[$key] = $val;
        }
        return $arr;
}

$id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0; //pega o valor da url

if ( $id ) {

	$acao = ( isset( $_GET['acao'] ) ) ? $_GET['acao'] : 0; //pega o valor da url

	if ( $acao == "set") {	
	/**
	 * 	Marca como ativo ou inativo (sorteado ou não sorteado) a partir do ID
	 *	acao: check
	 *	param: ?ativo= (1||0)
	 */
		$code = ( isset( $_GET['code'] ) ) ? $_GET['code'] : 'vazio'; //pega o valor da url
		
		if ($code != "vazio") {

			if (($code == 0)||($code == 1)) {
				$result = mysql_query( "UPDATE inscricao2013_2 SET ativo = ". $code ." WHERE id=". $id .";") or die(mysql_error());
				$return = true;				
			} else {
				$return = false;
			}			
		} else {
			$return = false;
		}
		
		echo json_encode($return);


	} 
	elseif ( $acao == "check" ) {
	/**
	 * 	Verifica se o usuario está ATIVO (sorteado)
	 *	Retorna false, ou true
	 *	
	 *	Acao: check
	 *	Param: ID, CODE (0||1)
	 *	return: (true || false)
	 */
		$code = ( isset( $_GET['code'] ) ) ? $_GET['code'] : 'vazio'; //pega o valor da url
		
		if ($code != "vazio") {
			$result = mysql_query("SELECT * FROM inscricao2013_2 WHERE id = " . $id); 	//query
			$array 	= mysql_fetch_array($result);										//fetch array
			$return = ( $array['ativo'] == $code ) ? true : false;
			echo json_encode($return);

		} else {
			echo "";
		}
		
		//
	}
} else {
	echo "error=id nao definido";
}

?>