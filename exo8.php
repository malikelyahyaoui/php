<h1>Exercice 8</h1>


Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en parametre sous la forme.

<h2>Résultat</h2>

<?php
function tableMultiplication($nombre) {
    for ($i = 1; $i <= 10; $i++) {
        $produit = $nombre * $i;
        
        echo "$nombre x $i = $produit <br>";
    }
}

$nombre = 7; 
tableMultiplication($nombre);
