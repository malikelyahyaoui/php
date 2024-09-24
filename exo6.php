<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA(exprimé en décimal. Ex:20%->0.2)</p>

<?php



$nbArticles = 9.99;
$prixHT = 5.00;
$tauxTVA = 0.2;




$facture = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
echo "le prix unitaire de l'article est de: $nbArticles<br>";
echo " quantite:$prixHT<br>";
echo "TVA: $tauxTVA <br>";
echo "la facture s'élève à $facture euros";

