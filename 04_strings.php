<?php

// Create simple string
$string = "Hello, I am Eva"; // Extract TheCodeholic into variable
$string2 = 'Hello, I am Eva'; // Replace TheCodeholic with variable
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo "Hello " . " World <br>   "; // Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World   ";
//Calcule et affiche la longueur de la chaîne de caractères
echo "1 - " . strlen($string) . '<br>' ;

// Supprime les espaces en début et en fin de la chaîne de caractères $string et affiche le résultat.
echo "2 - " . trim($string) . '<br>' ;

echo "3 - " . ltrim($string) . '<br>' ;
echo "4 - " . rtrim($string) . '<br>' ;
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hello world') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>'; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8) . '<br>';
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>';

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_repeat('Hello', 2) . '<br>';


// Multiline text and line breaks
$longText = "
  Hello, my name is Eva
  I am 27,
  I love my daughter(J'aime ma fille)
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Eva</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';
echo "6 - " . htmlspecialchars($longText) . '<br>';


// https://www.php.net/manual/en/ref.strings.php
