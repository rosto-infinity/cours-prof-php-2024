<?php
// Création de la variable de type int sans initialisation
$integerVar;

// Affichage de sa valeur
echo "Valeur de la variable (non initialisée) : " . $integerVar . "<br>"; // Affichera 0

// Donner une valeur à la variable
$integerVar = 5;
// Utilisation de gettype() pour obtenir le type de la variable
$type = gettype($integerVar);
// Affichage de la nouvelle valeur de la variable
echo "Nouvelle valeur de la variable : " . $integerVar;

