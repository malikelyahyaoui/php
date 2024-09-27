<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme </p>
<h2>Resultat</h2>
<?php


function table_multiplication_for($n) {
    echo "Table de $n :\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i x $n = " . ($i * $n) . "\n";
    }
}

table_multiplication_for(8);


// function table_multiplication_while($n) {
//     echo "Table de $n :\n";
//     $i = 1;
//     while ($i <= 10) {
//         echo "$i x $n = " . ($i * $n) . "\n";
//         $i++;
//     }
// }


// table_multiplication_while(8);
?>


