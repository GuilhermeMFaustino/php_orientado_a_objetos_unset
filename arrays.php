<?php

$meses = [

    "0" => "janeiro",
    "1" => "fevereiro",
    "2" => "marco",
    "3" => "abril",
    "4" => "maio",
    "5" => "junho",
    "6" => "julho",
    "7" => "agosto",
    "8" => "setembro",
    "9" => "outubro",
    "10" => "novembro",
    "11" => "dezembro"
];

//var_dump($meses);


function dataAtual(): string
{
    $dia = date("w");
    $diadaSemana = date("d");
    $mes = date("m");
    $ano = date("Y");

    $diasSemana = [

        "0" => "domingo",
        "1" => "segunda",
        "2" => "terca",
        "3" => "quarta",
        "4" => "quinta",
        "5" => "sexta",
        "6" => "sabado"
    ];

    $mesAno = [
        "1" => "janeiro",
        "2" => "fevereiro",
        "3" => "marco",
        "4" => "abril",
        "5" => "maio",
        "6" => "junho",
        "7" => "julho",
        "8" => "agosto",
        "9" => "setembro",
        "10" => "outubro",
        "11" => "novembro",
        "12" => "Dezembro"
    ];

    foreach ($diasSemana as $d=>$b) {
        foreach($mesAno as $meses=>$m){
            if($d == $dia && $meses == $mes){
              $dataformatada =  ($diasSemana[$d] == "sabado" ? "Sabado" : $diasSemana[$d]. "-feira").", ". $diadaSemana ." de ".$m . " de " . $ano;
            }
        }
    }
   return $dataformatada; 
}
var_dump(dataAtual());
