<h1>Exercice 1</h1>


<p>Soit la phrase "notre formation DL commence aujourd'hui".<br>


Ecrire un algorithme permettant de compter le nombre de caractères contenu dans cette phrase.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longueur= strlen($phrase);
echo"La phrase    <<   $phrase  >> = contient $longueur caractères <br>";
echo"La phrase    <<   $phrase  >> = contient ". strlen ($phrase). "caractères <br>";