<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>RESULTAT</h2>

<?php
function direBonjour($prenom, $langue) {
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

$personnes = [
    'Marie' => 'français',
    'John' => 'anglais',
    'Mathilde' => 'espagnol',
    'Anna' => 'anglais',
    'Jean' => 'français'
];

foreach ($personnes as $prenom => $langue) {
    direBonjour($prenom, $langue);
}
