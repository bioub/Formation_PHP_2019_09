<?php

// 1 - Créer 2 variables qui contiennent
// votre prénom et votre nom :
$prenom = 'Romain';
$nom = 'Bohdanowicz';

// 2 - Créer une variable qui contient
// votre nom complet à partir des
// variables prénom et nom :
// camelCase (commencer avec des majuscules à partir de 2e mot)
$nomComplet = $prenom . ' ' . $nom;
$nomComplet = "$prenom $nom\n";

// 3 - La variable suivant contient un
// nom aléatoire compris en 0 et 100 :
$nbAlea = mt_rand(0, 100);

// 4 - Afficher cette variable avec la fonction
// var_dump :
var_dump($nbAlea);

// 5 - Créer une variable de type booléen
// qui contient true si le nombre aléatoire
// est supérieur à 10, false sinon
$estSup10 = $nbAlea > 10;

// 6 - Créer une variable qui contient true
// si le nombre aléatoire est un multiple de 10, false sinon
$estMultiple10 = $nbAlea % 10 === 0;

// 7 - Intervertir le contenu de ces 2 variables
// sans toucher au code existant :
$nb1 = 1;
$nb2 = 2;

$temp = $nb1;
$nb1 = $nb2;
$nb2 = $temp;


echo "\n";


// Optionnel

// 8 - Créer un tableau avec 10 nombre aléatoires entre 0 et 100

// 9 - Afficher le nombre de valeurs paires et impairs

// 10 - Faire la somme de tous les éléments du tableau 

// 11 - Créer une variable $nbAleaPair qui contient
// un nombre aléatoire pair
