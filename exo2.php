<h1>Exercice 2</h1>


<p>Soit la phrase "notre formation DL commence aujourd'hui".<br>
ecrire l'instruction qui permet de compter le nombre de mots que contient celle-ci</p>

<h2> Résultat</h2>


<?php
$chaineDeCaracteres = "notre formation DL commence aujourd'hui.";
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots Mots.<br>";


