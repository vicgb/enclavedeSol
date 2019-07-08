<?php


function validaEmail($valor)
{
    if (filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE) {
        return false;
    } else {
        return true;
    }
}

function validaRequerido($valor)
{
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

