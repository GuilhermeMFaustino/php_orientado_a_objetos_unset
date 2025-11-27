<?php


$email = "gui@gmail.com";
function validaEmail($email)
{
    $emailValido =  filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($emailValido == false) {
        return false;
    } else {
        return true;
    }
}

var_dump(validaEmail($email));
