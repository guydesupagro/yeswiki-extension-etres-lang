<?php

function getLang()
{
    // cf . https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language

    // Récupère la première lang choisie dans HTTP_ACCEPT_LANGUAGE.
    $lang = trim(explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);

    // enleve la quality value si besoin.
    $lang = explode(';', $lang)[0];

    // Supprimer les données apres le tiret.
    $lang = explode('-', $lang)[0];

    return $lang;
}
