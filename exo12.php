<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>RESULTAT</h2>

<?php
// Fonction pour dire bonjour dans la langue respective
function direBonjour($prenom, $langue) {
    // Utilisation d'un switch pour saluer dans la langue correspondante
    switch ($langue) {
        case 'français':
            echo "Salut $prenom !<br>";
            break;
        case 'anglais':
            echo "Hello $prenom !<br>";
            break;
        case 'espagnol':
            echo "Hola $prenom !<br>";
            break;
        default:
            echo "Bonjour $prenom ! (langue non reconnue)<br>";
            break;
    }
}

// Tableau associatif des prénoms et langues associées
$personnes = [
    'Marie' => 'français',
    'John' => 'anglais',
    'Mathilde' => 'espagnol',
    'Anna' => 'anglais',
    'Jean' => 'français'
];

// Parcours du tableau pour saluer chaque personne dans sa langue
foreach ($personnes as $prenom => $langue) {
    direBonjour($prenom, $langue);
}