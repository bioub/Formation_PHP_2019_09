<?php

$nbAlea = mt_rand(0, 100);

if ($nbAlea > 10) {
    echo "$nbAlea est supérieur à 10\n";
}

if ($nbAlea % 10 === 0) {
    echo "$nbAlea est un multiple de 10\n";
} else {
    echo "$nbAlea n'est pas un multiple de 10\n";
}

// Pyramid of Doom
//if ($nbAlea < 10) {
//    echo "$nbAlea est inférieur à 10\n";
//} else {
//    if ($nbAlea < 20) {
//        echo "$nbAlea est inférieur à 20\n";
//    } else {
//        if ($nbAlea < 30) {
//            echo "$nbAlea est inférieur à 30\n";
//        } else {
//            if ($nbAlea < 40) {
//                echo "$nbAlea est inférieur à 40\n";
//            } else {
//                echo "$nbAlea est supérieur à 40\n";
//            }
//        }
//    }
//}

if ($nbAlea < 10) {
    echo "$nbAlea est inférieur à 10\n";
} else if ($nbAlea < 20) {
    echo "$nbAlea est inférieur à 20\n";
} else if ($nbAlea < 30) {
    echo "$nbAlea est inférieur à 30\n";
} else if ($nbAlea < 40) {
    echo "$nbAlea est inférieur à 40\n";
} else {
    echo "$nbAlea est supérieur à 40\n";
}

//$motSupOuInf = '';
//
//if ($nbAlea > 50) {
//    $motSupOuInf = 'supérieur';
//} else {
//    $motSupOuInf = 'inférieur ou égal';
//}

// ternaire
$motSupOuInf = ($nbAlea > 50) ? 'supérieur' : 'inférieur ou égal';
        
echo "$nbAlea est $motSupOuInf à 50";

$nbAlea = mt_rand(0, 10);

//if ($nbAlea === 0) {
//    echo "Zéro\n";
//} else if ($nbAlea === 1 || $nbAlea === 2 || $nbAlea === 3) {
//    echo "Un, deux ou trois\n";
//} else {
//    echo "Autre\n";
//}

//if ($nbAlea === 0) {
//    echo "Zéro\n";
//} else if (in_array($nbAlea, [1, 2, 3])) {
//    echo "Un, deux ou trois\n";
//} else {
//    echo "Autre\n";
//}

switch ($nbAlea) {
    case 0:
        echo "Zéro\n";
        break;
    case 1:
    case 2:
    case 3:
        echo "Un, deux ou trois\n";;
        break;
    default:
        echo "Autre\n";
}