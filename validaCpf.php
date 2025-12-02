<?php


$cpf = '529.952.247-25';

function validaCPF($cpf): bool
{
    $cpf = preg_replace('/[^0-9]/', "", $cpf);
    $digitoA = 0;
    $digitoB = 0;

    for ($i = 0, $x = 10; $i <= 8; $i++, $x--) {
        $digitoA += $cpf[$i] * $x;
    }
    $digito1 = ($digitoA * 10) % 11;
    //echo $digito1;
    for ($a = 0, $b = 11; $a <= 9; $a++, $b--) {
        // echo $cpf[$a]." x ".$b ."= "."<br>";
        $digitoB += $cpf[$a] * $b;
    }
    $segundo = ($digitoB * 10) % 11;
    //echo $segundo;
    if ($digito1 != $cpf[9] || $segundo != $cpf[10]) {
        return false;
    } else {
        return true;
    }
}

var_dump(validaCpf($cpf));
