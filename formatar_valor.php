<?php


function valorFormat(?float $valor = null)
{
   return number_format($valor ? $valor : 0, "2", ".", ",");
}