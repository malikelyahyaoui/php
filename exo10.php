<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €</p>

<h2>Resultat</h2>


<?php
// Fonction pour calculer et afficher le rendu de monnaie
function rendreMonnaie($montantAPayer, $sommeVersee) {
    // Calcul de la différence entre la somme versée et le montant à payer
    $rendu = $sommeVersee - $montantAPayer;
    
    if ($rendu < 0) {
        // Si la somme versée est insuffisante
        return "La somme versée est insuffisante. Il manque " . abs($rendu) . " €.";
    } elseif ($rendu == 0) {
        // Si pas de rendu
        return "Pas de monnaie à rendre.";
    } else {
        // Initialisation des types de billets et pièces
        $billet10 = 0;
        $billet5 = 0;
        $piece2 = 0;
        $piece1 = 0;
        
        // Calcul du nombre de billets de 10 €
        $billet10 = intdiv($rendu, 10);
        $rendu %= 10;

        // Calcul du nombre de billets de 5 €
        $billet5 = intdiv($rendu, 5);
        $rendu %= 5;

        // Calcul du nombre de pièces de 2 €
        $piece2 = intdiv($rendu, 2);
        $rendu %= 2;

        // Le reste est en pièces de 1 €
        $piece1 = $rendu;

        // Affichage du rendu
        return "Monnaie à rendre :<br>" .
               "Billets de 10 € : $billet10<br>" .
               "Billets de 5 € : $billet5<br>" .
               "Pièces de 2 € : $piece2<br>" .
               "Pièces de 1 € : $piece1<br>";
    }
}

// Exemple d'utilisation
$montantAPayer = 50; // Montant à payer en euros
$sommeVersee = 50;   // Somme versée en euros

$resultat = rendreMonnaie($montantAPayer, $sommeVersee);

echo $resultat;