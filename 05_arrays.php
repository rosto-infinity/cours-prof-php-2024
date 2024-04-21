<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
// Imprime tout le tableau
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// Get element by index
// Récupère l'élément par index
echo $fruits[1].'<br>';

// Set element by index
// Définir l'élément par index
$fruits[0] = "Peach";

// Check if array has element at index 2
// Vérifiez si le tableau a un élément à l'index 2
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// Print the length of the array
// Affiche la longueur du tableau
echo count($fruits).'<br>';

// Add element at the end of the array
// Ajoute un élément à la fin du tableau
$fruits[] = 'Peach';
echo $fruits[3].'<br>';
array_push($fruits, 'Foo');

// Remove element from the end of the array
// Supprime l'élément de la fin du tableau
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
// Ajoute un élément au début du tableau
array_unshift($fruits, 'Apple');
// Remove element from the beginning of the array
// Supprime l'élément du début du tableau
array_shift($fruits);

// Split the string into an array
// Divise la chaîne en un tableau
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);

// Combine array elements into string
// Combine les éléments du tableau en chaîne
echo implode(",", $fruits).'<br>';

// Check if element exist in the array
// Vérifie si l'élément existe dans le tableau
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// Search element index in the array
// Recherche l'index de l'élément dans le tableau
echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';

// Merge two arrays
// Fusionner deux tableaux
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
echo '</pre>';

// Sorting of array (Reverse order also)
// Tri du tableau (ordre inverse également)
sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
// Get element by key
// Récupère l'élément par clé
echo $person['name'].'<br>';

// Set element by key
// Définir l'élément par clé
$person['channel'] = 'TraversyMedia';

//Null coalescing assignment operator. Since PHP 7.4
//Opérateur d'affectation de coalescence nul. Depuis PHP 7.4
if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}
$person['address'] ??= 'Unknown';
echo $person['address'].'<br>';

// Check if array has specific key
// Vérifie si le tableau a une clé spécifique
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
// Tri des tableaux associatifs par valeurs, par clés
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';

$fruits = array(
    "orange" => 2,
    "banane" => 4,
    "pomme" => 1,
    "fraise" => 3
);

ksort($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';
// Résultat : Array ( [banane] => 4 [fraise] => 3 [orange] => 2 [pomme] => 1 )

krsort($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';
// Résultat : Array ( [pomme] => 1 [orange] => 2 [fraise] => 3 [banane] => 4 )

asort($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';
// Résultat : Array ( [pomme] => 1 [orange] => 2 [fraise] => 3 [banane] => 4 )

arsort($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';
// Résultat : Array ( [banane] => 4 [fraise] => 3 [orange] => 2 [pomme] => 1 )

// 

    // Ces fonctions sont utiles lorsque vous travaillez avec des tableaux associatifs en PHP et que vous souhaitez les trier en fonction de leurs clés ou de leurs valeurs. Le tri peut être effectué de manière ascendante ou descendante, en fonction de la fonction utilisée.


//     ksort: Cette fonction trie un tableau associatif par les clés dans l'ordre croissant. Les clés restent associées à leurs valeurs respectives après le tri.
// krsort: Cette fonction trie un tableau associatif par les clés dans l'ordre décroissant. Les clés restent associées à leurs valeurs respectives après le tri.
// asort: Cette fonction trie un tableau associatif par les valeurs dans l'ordre croissant. Les clés restent associées à leurs valeurs respectives après le tri.
// arsort: Cette fonction trie un tableau associatif par les valeurs dans l'ordre décroissant. Les clés restent associées à leurs valeurs respectives après le tri.