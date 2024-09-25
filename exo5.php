<h1>Exercice 5</h1>


<p>


Ecrire un algorithme qui déclare une valeeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondire à 2 décimales</p>

<h2>Résultat</h2>

<?php
define("TAUX_CONVERSION", 6.55957);

function convertirFrancsEnEuros($valeurFrancs) {
    $valeurEuros = $valeurFrancs / TAUX_CONVERSION;

    $valeurEurosArrondie = round($valeurEuros, 2);

    return $valeurEurosArrondie;
}

$valeurFrancs = 200; 
$valeurEuros = convertirFrancsEnEuros($valeurFrancs);

echo "$valeurFrancs francs = $valeurEuros euros";
?>
