<?php
//Exercice 1 :

//PHP


$variable = 0;
while ($variable < 10) {
    echo $variable . "<br>";
    $variable++;
}

//Exercice 2 :

//PHP


$variable1 = 0;
$variable2 = 50; // Changer cette valeur si nécessaire
while ($variable1 <= 20) {
    echo $variable1 * $variable2 . "<br>";
    $variable1++;
}

//Exercice 3 :

//PHP


$variable1 = 100;
$variable2 = 5; // Changer cette valeur si nécessaire
while ($variable1 > 10) {
    echo $variable1 * $variable2 . "<br>";
    $variable1--;
}

//Exercice 4 :

//PHP


$variable = 1;
while ($variable < 10) {
    echo $variable . "<br>";
    $variable += $variable / 2;
}

//Exercice 5 :

//PHP


for ($i = 1; $i <= 15; $i++) {
    echo "On y arrive presque.<br>";
}

//Exercice 6 :

//PHP


for ($i = 20; $i >= 0; $i--) {
    echo "C'est presque bon.<br>";
}

//Exercice 7 :

//PHP


for ($i = 1; $i <= 100; $i += 15) {
    echo "On tient le bon bout.<br>";
}

//Exercice 8 :

//PHP


for ($i = 200; $i >= 0; $i -= 12) {
    echo "Enfin !!!<br>";
}
