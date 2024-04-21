<?php
// Définition du tableau associatif des phrases correspondant à chaque magnitude
$magnitude_phrases = array(
    1 => "Micro-séisme impossible à ressentir.",
    2 => "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.",
    3 => "Ne cause pas de dégâts mais commence à pouvoir être légèrement ressenti.",
    4 => "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts.",
    5 => "Séisme capable d'engendrer des dégâts importants sur de vieux bâtiments ou bien des bâtiments présentant des défauts de construction. Peu de dégâts sur des bâtiments modernes.",
    6 => "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.",
    7 => "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.",
    8 => "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.",
    9 => "Séisme capable de tout détruire sur une très vaste zone."
);

// Définition de la magnitude
$magnitude = 1; // Vous pouvez changer cette valeur pour tester différents cas

// Vérification si la magnitude existe dans le tableau
if (array_key_exists($magnitude, $magnitude_phrases)) {
    // Affichage de la phrase correspondante à la magnitude
    echo $magnitude_phrases[$magnitude];
} else {
    // Si la magnitude n'est pas dans le tableau, affichage d'un message d'erreur
    echo "Magnitude inconnue.";
}



// // Définition de la magnitude
// $magnitude = 7; // Vous pouvez changer cette valeur pour tester différents cas

// // Affichage de la phrase correspondante en fonction de la magnitude
// switch ($magnitude) {
//     case 1:
//         echo "Micro-séisme impossible à ressentir.";
//         break;
//     case 2:
//         echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
//         break;
//     case 3:
//         echo "Ne cause pas de dégâts mais commence à pouvoir être légèrement ressenti.";
//         break;
//     case 4:
//         echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts.";
//         break;
//     case 5:
//         echo "Séisme capable d'engendrer des dégâts importants sur de vieux bâtiments ou bien des bâtiments présentant des défauts de construction. Peu de dégâts sur des bâtiments modernes.";
//         break;
//     case 6:
//         echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
//         break;
//     case 7:
//         echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
//         break;
//     case 8:
//         echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
//         break;
//     case 9:
//         echo "Séisme capable de tout détruire sur une très vaste zone.";
//         break;
//     default:
//         echo "Magnitude inconnue.";
// }


