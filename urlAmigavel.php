<?php
function slug(string $url): string{

    filter_var(mb_strtolower($url), FILTER_SANITIZE_SPECIAL_CHARS);
    $formats = 'ÁÀÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßáàâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ@$%&*()_-=+={}[]/?`!;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyrr                                 '; 
    
    $urlnova = strtr($url, $formats, $replace);
    // tudo minúsculo
    $urlnova = strtolower($urlnova);
    $urlnova = strip_tags(trim($url));
    // converter espaços em traço
    $urlnova = preg_replace('/\s+/', '-', $urlnova);
    // remover caracteres inválidos
    $urlnova = preg_replace('/[^a-z0-9\-]/', '', $urlnova);
    // substituir múltiplos traços
    $urlnova = preg_replace('/-+/', '-', $urlnova);
    //tira os espacos em branco.
    $urlnova = trim($urlnova, '-');

    return $urlnova;
}

$url = "a cada de parata E clacçãp testando     azul<script></script>!";

var_dump(slug($url));