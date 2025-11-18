<?php



$data = "2025-11-01  13:35:25";

$dateDia = strtotime(date("Y-m-d  H:i:s"));
$tempo = strtotime($data);
$milesegundos = $dateDia - $tempo;


$segundos = $milesegundos;
$minutos = $milesegundos / 60;
$hora = round($milesegundos / 3600);
$dias = round($milesegundos / 86400);
$semanas = round($milesegundos / 604800);
$mes = round($milesegundos / 2419200);
$ano = round($milesegundos / 29030400);

var_dump($dias);