<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>


<h2>Resultat</h2>

<?php


$phrase="taco cat";


function EstPalindrome($phrase){
    $phrase= strtolower($phrase);
    
    $phrase= str_replace(' ', '', $phrase);
    return $phrase === strrev($phrase);


}

if (estPalindrome($phrase)) {
    echo "La phrase $phrase est un palindrome.";
} else {
    echo "La phrase $phrase n'est pas un palindrome.";
}