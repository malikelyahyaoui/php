<h1>Exercice 4</h1>


<p>Soit la phrase "notre formation DL commence aujourd'hui".<br>


Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?php


function estPalindrome($phrase) {
    // Convertir en minuscules
    $phrase = strtolower($phrase);
    
    // Retirer tous les espaces et la ponctuation (en conservant seulement les lettres et chiffres)
    $phrase = preg_replace('/[^a-z0-9]/', '', $phrase);
    
    // Vérifier si la phrase est égale à son inverse
    return $phrase === strrev($phrase);
}

// Exemple d'utilisation avec la phrase donnée
$phrase = "taco cat";

if (estPalindrome($phrase)) {
    echo "La phrase $phrase est un palindrome.";
} else {
    echo "La phrase $phrase n'est pas un palindrome.";
}
?>