<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>RESULTAT</h2>

<?php
function calculerMoyenne($notes) {
    $somme = array_sum($notes);
    
    $nombreDeNotes = count($notes);
    
    $moyenne = $somme / $nombreDeNotes;
    
    return number_format($moyenne, 2);
}

$notes = [14, 16, 13.5, 12, 15];

$moyenneGenerale = calculerMoyenne($notes);

echo "La moyenne générale de l'élève est : $moyenneGenerale";
?>

