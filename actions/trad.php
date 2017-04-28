<?php

/**
 * getLang Découpe $_SERVER['HTTP_ACCEPT_LANGUAGE'] pour obtenir la première
 * langue choisie (uniquement les deux premiers caractères)
 * @return [type] [description]
 */
include_once('tools/etres-lang/includes/etres-lang.func.php');


// test de sécurité pour vérifier si on passe par wiki
if (!defined('WIKINI_VERSION')) {
    die('acc&egrave;s direct interdit');
}

$defaultLang = 'en';

// Gère l'absence du paramètre ref
$ref = $this->GetParameter('ref');
if (empty($ref)) {
    print("{{trad}} : parameter 'ref' must be defined");
    return;
}

// Charge le fichier de langue
$lang = getLang();
$file = "tools/etres-lang/lang/$defaultLang.php";
if (file_exists("tools/etres-lang/lang/$lang.php")) {
    $file = "tools/etres-lang/lang/$lang.php";
}
include($file);

$text = "No traduction available for '$ref'";
if (isset($etresTraductions[$ref])) {
    $text = $etresTraductions[$ref];
}
print($text);
