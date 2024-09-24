<h1>Exercice 8</h1>


Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en parametre sous la forme.

<h2>Résultat</h2>

<?php
// Fonction pour afficher la table de multiplication d'un nombre
function tableMultiplication($nombre) {
    // Boucle de 1 à 10 pour afficher la table de multiplication
    for ($i = 1; $i <= 10; $i++) {
        // Calcul du produit
        $produit = $nombre * $i;
        
        // Affichage du résultat sous forme "nombre x i = produit"
        echo "$nombre x $i = $produit <br>";
    }
}

// Exemple d'utilisation
$nombre = 7; // Le nombre dont on veut afficher la table
tableMultiplication($nombre);