<?php

$data = "2025-11-19 14:31:00";

function tempo(string $data)
{
    // data atual
    $dateDia = time();
    $tempo = strtotime($data);

    // diferença em segundos
    $dif = $dateDia - $tempo;

    // conversões
    $segundos = $dif;
    $minutos = $dif / 60;
    $hora     = $dif / 3600;
    $dia     = $dif / 86400;
    $semana  = $dif / 604800;
    $mes      = $dif / 2419200;
    $ano      = $dif / 29030400;


    echo $hora . "</br>";

    if ($segundos < 60) {
        return "agora";
    } elseif ($minutos < 60) {
        return $minutos < 2 ? "há 1 minuto" : "há " . round($minutos) . " minutos";
    } elseif ($hora < 24) {
        return round($hora) == 1 ? "há 1 hora" : "há " . round($hora) . " horas";
    } elseif ($dia < 7) {
        return round($dia) == 1 ? "há 1 dia" : "há " . round($dia) . " dias";
    } elseif ($semana < 4) {
        return round($semana) == 1 ? "há 1 semana" : "há " . round($semana) . " semanas";
    } elseif ($mes < 12) {
        return round($mes) == 1 ? "há 1 mês" : "há " . round($mes) . " meses";
    } else {
        return round($ano) == 1 ? "há 1 ano" : "há " . round($ano) . " anos";
    }
}

echo tempo($data);
