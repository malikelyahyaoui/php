<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20ans, alors celle-ci est imposable
    (sinon ce n'est pas le cas,<<non imposable>>).
</p>

<h2>RESULTAT</h2>
<?php


function estImposable($age, $sexe) {
    if (($sexe === 'femme' && $age >= 18 && $age <= 35) || 
        ($sexe === 'homme' && $age > 20)) {
        return "la personne est imposable"; 
    } else {
        return " la personne n'est pas imposable"; 
    }
}

// 'utilisation
$age1 = 25;
$sexe1 = 'femme';

$age2 = 22;
$sexe2 = 'homme';

$imposable1 = estImposable($age1, $sexe1);
$imposable2 = estImposable($age2, $sexe2);

echo "La personne 1 est " . ($imposable1 ? "imposable" : "non imposable") . ".\n";
echo "La personne 2 est " . ($imposable2 ? "imposable" : "non imposable") . ".\n";
?>
