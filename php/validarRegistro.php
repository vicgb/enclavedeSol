<?php

function validaEmail($valor){
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
        return false;
    }else{
        return true;
    }
}

function validaRequerido($valor){
    if(trim($valor) == ''){
        return false;
    }else{
        return true;
    }
}

function validaPassword($valor1, $valor2){
    $resp = false;

    if(trim($valor1) !== '' && trim($valor2) !== ''){
       if($valor1 == $valor2) {
            $resp = true;
        }
    }
    return $resp;
}


?>