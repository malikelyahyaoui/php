<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €</p>

<h2>Resultat</h2>


<?php
function rendreMonnaie($montantAPayer, $sommeVersee) {
    $rendu = $sommeVersee - $montantAPayer;
    
    if ($rendu < 0) {
        return "La somme versée est insuffisante. Il manque " . abs($rendu) . " €.";
    } elseif ($rendu == 0) {
        return "Pas de monnaie à rendre.";
    } else {
        $billet10 = 0;
        $billet5 = 0;
        $piece2 = 0;
        $piece1 = 0;
        
        $billet10 = intdiv($rendu, 10);
        $rendu %= 10;

        $billet5 = intdiv($rendu, 5);
        $rendu %= 5;

        $piece2 = intdiv($rendu, 2);
        $rendu %= 2;

        $piece1 = $rendu;

        return "Monnaie à rendre :<br>" .
               "Billets de 10 € : $billet10<br>" .
               "Billets de 5 € : $billet5<br>" .
               "Pièces de 2 € : $piece2<br>" .
               "Pièces de 1 € : $piece1<br>";
    }
}

$montantAPayer = 50; 
$sommeVersee = 50;   

$resultat = rendreMonnaie($montantAPayer, $sommeVersee);

echo $resultat;
