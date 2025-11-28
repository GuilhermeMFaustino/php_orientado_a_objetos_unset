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


function dataAtual()
{
    $dia = date("w");
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

    foreach ($diasSemana as $d=>$b) {
      if($d == $dia){
        $dataformatada =  ($diasSemana[$d] == "sabado" ? "Sabado" : $diasSemana[$d]. "-feira").$mes . " de " . $ano;
      }
    }
   return $dataformatada; 
}
var_dump(dataAtual());
