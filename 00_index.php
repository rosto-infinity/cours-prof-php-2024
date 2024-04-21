<?php
echo 'Hello, PH..P';
$name ="EVA";
$estEtudiant =true;
$nbre = 11;
$nbre2 = 1.1;
$fruits = array("Pomme", "Banane", "Orange");
$fruits2 = ["Pomme", "Banane", "Orange"];

// $dat = new PDO()


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
$name = "Eva";
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
echo gettype($name) . ' AA <br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
// Imprime toute la variable
var_dump($name, $age, $isMale, $height, $salary);
echo  '<br>';


// Change the value of the variable
$name = false;
echo gettype($name) . '<br>';
echo  '<br>';

echo (' Print type of the variable <br>');
// Variable checking functions
is_string($name);  // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true
$name2=2;
// Check if variable is defined
var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';

// Constants
define('PI', 3.124);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// 12. Utilisation des constantes intégrées PHP
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';












echo'<pre>';
// var_dump();    
echo'</pre>';


echo'<pre>';
// var_dump($name);   
// var_dump($nbre);   
// var_dump($nbre2);   
// var_dump($estEtudiant);   
// var_dump($fruits);   
echo'</pre>';

$nombreTexte = "10";
$nombre = intval($nombreTexte); // Conversion de la chaîne en entier

$prixTexte = "a10.330";
$prix = floatval($prixTexte); // Conversion 

$age = 25;
$ageTexte = strval($age); // Conversion de l'entier en chaîne

$entier =2.2;
$decimall=floatval($entier);
$entier2=intval($entier);

echo'<pre>';
// var_dump($entier);    
// var_dump($entier2);    
// var_dump($decimall);    
// var_dump($ageTexte);    
// var_dump($nombreTexte);    
// var_dump($nombre);    
// var_dump($prixTexte);    
// var_dump($prix);    
echo'</pre>';

$a =1;
$b=9;
$somme = $a + $b; // Addition
$difference = $a - $b; // Soustraction
$produit = $a * $b; // Multiplication
$quotient = $a / $b; // Division
$reste = $a % $b; // Modulo (reste de la division)
$a = 5;
$b = 10;

$estPlusGrand = $a > $b; // Vrai si $a est supérieur à $b
$estDifferent = $a !=  $b; // Vrai si $a est différent de $b

$estVrai = true;
$estFaux = false ; 
$estFaux = !$estVrai; // Négation

$estVraiEtPlusGrand = $estVrai && $estPlusGrand; // Vrai si $estVrai et $estPlusGrand sont tous deux vrais

$estVraiOuPlusGrand = $estVrai || $estPlusGrand; // Vrai si au moins l'une des deux conditions est vraie

$prenom = "EVA";
$nom = "Myra";
$agee =12;
$info = "je suis " . $prenom . " " . $nom . " et j'ai " . $agee ." ans"; // Concaténation

//l'interpolation de variables
$info2="Je suis $prenom $nom et j'ai $agee ans";

// echo $info;
// echo $info2;


$age = 12;

if ($age >= 18) {
  echo "Vous êtes majeur.";
}

if ($age >= 18) {
    echo "Vous êtes majeur.";
  }else{
    
   echo "Vous êtes mineur.";
}

//ternaire
$aage = 18;
$message = ($aage >= 18) ? "Vous êtes majeur."
                       : "Vous êtes mineur";
echo $message;

$age = 65;

if ($age < 18) {
    echo "Vous êtes mineur.";
} elseif ($age >= 18 && $age < 65) {
  //[18, 65[   ou  18 <= $age <65
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes un senior.";
}
$jour = "lundi";

switch ($jour) {
    case "lundi":
        echo "C'est le début de la semaine.";
        break;
    case "mardi":
    case "mercredi":
    case "jeudi":
        echo "C'est en milieu de semaine.";
        break;
    case "vendredi":
        echo "C'est presque le week-end.";
        break;
    default:
        echo "C'est le week-end.";
        break;
}
//Boucles 
echo "<br>";
   
$compteur = 4;

// while ($compteur <= 5) {
//     // echo "Le compteur est : " . $compteur . "<br>";
//     // $compteur++;
// }
// for ($i = 0; $i <= 5; $i++) {
//   echo "La valeur de i est : " . $i . "<br>";
// }

$fruitss = array("Pomme", "Banane", "Orange");

foreach ($fruitss as $fruit) {
    echo $fruit . "<br>";

}
// map().join('|');
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';

// https://www.php.net/manual/en/ref.math.php