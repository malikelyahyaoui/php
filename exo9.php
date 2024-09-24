<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20ans, alors celle-ci est imposable
    (sinon ce n'est pas le cas,<<non imposable>>).
</p>

<h2>RESULTAT</h2>

<?php

// Fonction pour vérifier si une personne est imposable en fonction de l'âge et du sexe
function estImposable($age, $sexe) {
    // On normalise le sexe pour éviter des erreurs de casse (par exemple, "Homme" ou "homme")
    $sexe = strtolower($sexe);
    
    // Vérification des critères pour la femme
    if ($sexe == "femme" && $age >= 18 && $age <= 35) {
        return "Imposable";
    }
    // Vérification des critères pour l'homme
    elseif ($sexe == "homme" && $age > 20) {
        return "Imposable";
    }
    // Si aucun critère n'est respecté, la personne est non imposable
    else {
        return "Non imposable";
    }
}

// Exemple d'utilisation
$age = 18;       // Âge de la personne
$sexe = "homme"; // Sexe de la personne (peut être "homme" ou "femme")

$resultat = estImposable($age, $sexe);

echo "La personne est : $resultat";