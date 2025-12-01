<?php


function saudacoes(): string
{

    $hora = date("H");

    switch ($hora) {

        case ($hora >= 0 and $hora <= 5):
            $saudacoes = "Bom Madrugada.";
        break;

        case ($hora >= 6 and $hora <= 12):
            $saudacoes = "Bom dia";
        break;

        case ($hora >= 12 and $hora <= 18):
            $saudacoes = "boa Tarde";
        break;

        case ($hora >= 18 and $hora <= 22):
            $saudacoes = "boa Noite";
        break;
    }
    return $saudacoes;
}

var_dump(saudacoes());
