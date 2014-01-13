<?php 
/*
 * Funções úteis
 *
 */

function format_phone($phone)
{
    $phone = preg_replace("/[^0-9]/", "", $phone);

    if(strlen($phone) == 8)
        return preg_replace("/([0-9]{4})([0-9]{4})/", "$1-$2", $phone);
	elseif(strlen($phone) == 9)
        return preg_replace("/([0-9]{5})([0-9]{4})/", "$1-$2", $phone);    
    elseif(strlen($phone) == 10)
        return preg_replace("/([0-9]{2})([0-9]{4})([0-9]{4})/", "($1) $2-$3", $phone);
    elseif(strlen($phone) == 11)
        return preg_replace("/([0-9]{2})([0-9]{5})([0-9]{4})/", "($1) $2-$3", $phone);
    else
        return $phone;    
}

function format_cep($pCep)
{
    $cep = preg_replace("/[^0-9]/", "", $pCep);

    if(strlen($cep) == 8)
        return preg_replace("/([0-9]{5})([0-9]{3})/", "$1-$2", $cep);    
    else
        return $cep;    
}

function calcula_idade($data_nasc) 
{
    //echo gettype($data_nasc);
    $data_nasc = explode("/", $data_nasc);    
    $data_atual = date("d/m/Y");
    $data_atual = explode("/", $data_atual);
    $anos = $data_atual[2] - $data_nasc[2];

    if ($data_nasc[1] >= $data_atual[1]) {
        if ($data_nasc[0] <= $data_atual[0]) {
            return $anos;
        }
        else {
            return $anos-1;
        }
    } else {
        return $anos;
    }
}


?>