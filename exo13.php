<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>RESULTAT</h2>

<?php
// Fonction pour calculer la moyenne générale
function calculerMoyenne($notes) {
    // Calcul de la somme des notes
    $somme = array_sum($notes);
    
    // Calcul du nombre de notes
    $nombreDeNotes = count($notes);
    
    // Calcul de la moyenne (sans coefficient)
    $moyenne = $somme / $nombreDeNotes;
    
    // Retourner la moyenne avec 2 décimales
    return number_format($moyenne, 2);
}

// Tableau contenant les notes de l'élève
$notes = [14, 16, 13.5, 12, 15];

// Calcul de la moyenne générale
$moyenneGenerale = calculerMoyenne($notes);

// Affichage de la moyenne
echo "La moyenne générale de l'élève est : $moyenneGenerale";
?>

