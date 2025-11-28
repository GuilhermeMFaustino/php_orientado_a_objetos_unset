<?php 

function url(string $url): string
{
    $srevidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($srevidor == 'localhostc' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);
    return $ambiente."/".$url;
}
