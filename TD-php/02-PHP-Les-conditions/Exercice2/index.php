<?php
// Initialisation de la variable age avec une valeur
$age = 20; // Vous pouvez remplacer cette valeur par n'importe quelle autre valeur d'âge

// Vérification de l'âge et affichage du message approprié
if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}

// Initialisation de la variable age avec une valeur
$age2 = 20; // Vous pouvez remplacer cette valeur par n'importe quelle autre valeur d'âge

// Utilisation de l'opérateur ternaire pour déterminer le message à afficher
$message = ($age2 >= 18) ? " majeur." : " mineur.";

// Affichage du message
echo "Vous êtes" . $message;


