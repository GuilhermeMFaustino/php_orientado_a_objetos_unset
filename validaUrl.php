<?php

function validaUrl(string $url): bool
{
    //$url = filter_var($url, FILTER_VALIDATE_URL);

    if (!str_contains($url, "http://")) {
        return false;
    }    

    if(str_contains($url, 'http://') || str_contains($url, 'https://')){
        return true;
    }
    
    return false;
}

$url = "hp://";

var_dump(validaUrl($url));
