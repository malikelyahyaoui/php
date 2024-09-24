<h1>Exercice 7</h1>


Ecrire un algorithme permettant de renvoyer la catégorie d'un enfannt en fonction de son âge.
<h2>Résultat</h2>

<?php




function determinerCategorieEnfant($age) {
    if ($age >= 6 && $age <= 7) {
        return "Poussin";
    } elseif ($age >= 8 && $age <= 9) {
        return "Pupille";
    } elseif ($age >= 10 && $age <= 11) {
        return "Minime";
    } elseif ($age >= 12) {
        return "Cadet";
    } else {
        return "Âge non catégorisé";
    }
}


$age = 8; 
$categorie = determinerCategorieEnfant($age);

echo "L'enfant de $age ans appartient à la catégorie : $categorie";