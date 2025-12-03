<?php
function validaCPF($cpf)
{


    $cpf = preg_replace('/[^0-9]/', "", $cpf);
    $digitoA = 0;
    $digitoB = 0;

    for ($i = 0, $x = 10; $i <= 8; $i++, $x--) {
        $digitoA += $cpf[$i] * $x;
    }
    //echo $digito1;
    for ($a = 0, $b = 11; $a <= 9; $a++, $b--) {
        // echo $cpf[$a]." x ".$b ."= "."<br>";
        if (str_repeat($a, 11) == $cpf) {
            return false;
           // return;
        }
        
        $digitoB += $cpf[$a] * $b;
    }
    $digito1 = ($digitoA * 10) % 11;
    $segundo = ($digitoB * 10) % 11;
    //echo $segundo;
    if ($digito1 != $cpf[9] || $segundo != $cpf[10]) {
        return false;
    } else {
        return true;
    }
}

$cpf = '058.973.224-22';
var_dump(validaCpf($cpf));
