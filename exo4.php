<h1>Exercice 4</h1>


<p>Soit la phrase "notre formation DL commence aujourd'hui".<br>


Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?php


function estPalindrome($phrase) {
    $phrase = strtolower($phrase);
    
    $phrase = preg_replace('/[^a-z0-9]/', '', $phrase);
    
    return $phrase === strrev($phrase);
}

$phrase = "taco cat";

if (estPalindrome($phrase)) {
    echo "La phrase $phrase est un palindrome.";
} else {
    echo "La phrase $phrase n'est pas un palindrome.";
}
?>
