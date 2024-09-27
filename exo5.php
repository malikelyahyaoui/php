<h1>Exercice 5</h1>

<p></p>


<h2>Resultat</h2>


<?php



function convertirFrancsEnEuros($valeurFrancs) {
    $valeurEuros = $valeurFrancs / 6.55957;

    $valeurEurosArrondie = round($valeurEuros, 2);

    return $valeurEurosArrondie;
}

$valeurFrancs = 100; 
$valeurEuros = convertirFrancsEnEuros($valeurFrancs);


echo "$valeurFrancs francs = $valeurEuros euros";