<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20ans, alors celle-ci est imposable
    (sinon ce n'est pas le cas,<<non imposable>>).
</p>

<h2>RESULTAT</h2>

<?php

function estImposable($age, $sexe) {
    $sexe = strtolower($sexe);
    
    if ($sexe == "femme" && $age >= 18 && $age <= 35) {
        return "Imposable";
    }
    elseif ($sexe == "homme" && $age > 20) {
        return "Imposable";
    }
    else {
        return "Non imposable";
    }
}

$age = 18;      
$sexe = "homme"; 

$resultat = estImposable($age, $sexe);

echo "La personne est : $resultat";
