<?php
function slug(string $url): string{

    filter_var(mb_strtolower($url), FILTER_SANITIZE_SPECIAL_CHARS);
    $formats = 'ÁÀÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßáàâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ@$%&*()_-=+={}[]/?`!;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyrr                                 '; 
    
    $urlnova = strtr($url, $formats, $replace);
    $urlnova = strtolower($urlnova);
    $urlnova = strip_tags(trim($url));
    $urlnova = preg_replace('/\s+/', '-', $urlnova);
    $urlnova = preg_replace('/[^a-z0-9\-]/', '', $urlnova);
    $urlnova = preg_replace('/-+/', '-', $urlnova);
    $urlnova = trim($urlnova, '-');

    return $urlnova;
}

$url = "a cada de parata E clacçãp testando     azul<script></script>!";

var_dump(slug($url));