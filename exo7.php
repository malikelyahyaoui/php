<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge </p>

<h2>Resultat</h2>

<?php

function DeterminerCategorie($age){
    if ($age >= 12){
    return "Cadet";
} elseif ($age >= 11) {
    return "Minime";
} elseif ($age>= 9){
    return "Pupille";
} else {
    return "Poussin";
}}


$age = 10;
$categorie = DeterminerCategorie($age);
echo "L'enfant de $age ans appartient à la catégorie : $categorie";
