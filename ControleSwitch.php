<?php


function saudacoes(): string
{

    $hora = 0; //date("H");

    switch ($hora) {

        case ($hora > 0 and $hora <= 5):
            $saudacoes = "Boa Madrugada.";
        break;

        case ($hora >= 6 and $hora < 12):
            $saudacoes = "Bom dia";
        break;

        case ($hora >= 12 and $hora < 19):
            $saudacoes = "Boa Tarde";
        break;

        case ($hora > 18 and $hora < 0):
            $saudacoes = "Boa Noite";
        break;
    }
    return $saudacoes;
}

var_dump(saudacoes());
