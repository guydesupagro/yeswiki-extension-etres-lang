Extension etres-lang
====================

Traduit l'interface du site http://etreserasmus.eu en fonction de la langue
demandée par le navigateur.

L'action 'trad'
---------------

L'extension propose une action 'trad' qui prend le paramètre 'ref'
Sans paramètre l'action affiche un message d'erreur.

ex : {{trad ref="hat"}}


Les fichiers de traduction
--------------------------

Dans le dossier 'lang' de l'extension se trouve un fichier PHP par langue
disponible. Le nom de chacun de ces fichiers est composé des deux caractères de
la langue (ex fr pour français, en pour anglais, it pour italien) suivi de
l'extension '.php'.

Ce fichier contient un tableau appelé '$traductionEtres'. Dans ce tableau :
 - la clé est l'identifiant de la chaîne de caractères (paramètre ref de
    l'action trad)
 - La valeur, sa traduction dans la langue du fichier

Si le fichier correspondant à la langue demandée n'existe pas, c'est alors
l'anglais qui est choisis par défaut.

Si la clé correspondant à la référence passé en paramètre de l'action n'existe
pas un message d'erreur apparaît (No traduction available for 'ref').

Déterminer la langue
-------------------

La langue est déterminé via le paramètre 'HTTP_ACCEPT_LANGUAGE' de $_SERVER.
(cf : https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language)
Seule la première langue est prise en compte et seulement les deux premiers
caractère de celle ci.

ex :
 - pour 'fr-FR', seul 'fr' est pris en compte.
 - pour 'en-GB', seuls 'en' est pris en compte.
