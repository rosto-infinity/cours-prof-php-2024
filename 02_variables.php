<?php

// Qu'est-ce qu'une variable

// Types de variables
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Déclare les variables
$name = "Zura";
$age = 28;
$isMale = true; // Change en faux
$height = 1.85;
$salary = null;

// Imprime les variables. Expliquer ce qu'est la concaténation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Imprimer les types des variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
// Imprime toute la variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';

// Constants
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// 12. Utilisation des constantes intégrées PHP
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
