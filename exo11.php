<h1>Exercice 10</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Resultat</h2>

<?php


$tableau1 = array("Porsche", "Peugeot", "Fiat"); 

$tailleTableau1 = count($tableau1);
echo "il y'a  $tailleTableau1 marques de voitures: <br>";
echo $tableau1[0]."<br>";
echo $tableau1[1]."<br>";
echo $tableau1[2]."<br>";