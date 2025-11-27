<?php 

function localhost(): bool
{
    $server = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if($server == 'localhost'){
        return true;
    }
    return false;
}

var_dump(localhost());