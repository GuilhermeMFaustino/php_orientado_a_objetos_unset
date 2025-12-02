<?php


function clearNumber($numero): string
{
    return preg_replace('/[^0-9]/', '', $numero);
}

$cpf = clearNumber('529.982.247-25');
var_dump($cpf);