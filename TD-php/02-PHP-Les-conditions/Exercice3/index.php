<?php
// Initialisation des variables age et gender
$age = 5;
$gender = "Homme"; // Vous pouvez changer cette valeur à "Femme" pour tester l'autre cas

// Déterminer le message à afficher en fonction de l'âge et du genre
if ($gender == "Homme") {
    $genreMessage = "un homme";
} else {
    $genreMessage = "une femme";
}

// Utilisation de l'opérateur ternaire pour déterminer si la personne est majeure ou mineure
$majeurMessage = ($age >= 18) ? "majeur" : "mineur";

// Affichage du message correspondant
echo "Vous êtes " . $genreMessage . " et vous êtes " . $majeurMessage . ".";
?>
