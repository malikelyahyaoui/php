<h1>Exercice 5</h1>


<p>


Ecrire un algorithme qui déclare une valeeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondire à 2 décimales</p>

<h2>Résultat</h2>

<?php
// Déclaration du taux de conversion fixe
define("TAUX_CONVERSION", 6.55957);

// Fonction pour convertir des francs en euros
function convertirFrancsEnEuros($valeurFrancs) {
    // Conversion
    $valeurEuros = $valeurFrancs / TAUX_CONVERSION;

    // Arrondi à 2 décimales
    $valeurEurosArrondie = round($valeurEuros, 2);

    return $valeurEurosArrondie;
}

// Exemple d'utilisation
$valeurFrancs = 200; // valeur en francs
$valeurEuros = convertirFrancsEnEuros($valeurFrancs);

echo "$valeurFrancs francs = $valeurEuros euros";
?>
