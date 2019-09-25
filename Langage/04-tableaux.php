<?php
$prenoms = array('Jean', 'Eric');
$prenoms = ['Jean', 'Eric', 'Thierry']; // Depuis PHP 5.4
var_dump($prenoms);

$taille = count($prenoms);
var_dump($taille);

$premier = $prenoms[0];
$dernier = $prenoms[count($prenoms)-1];

// Remplace Jean par Toto
$prenoms[0] = 'Toto';

// Ajouter à la fin du tableau
// $prenoms[count($prenoms)] = 'Bob';
$prenoms[] = 'Bob';

// https://www.php.net/ref.strings
// https://www.php.net/manual/fr/ref.var.php
// https://www.php.net/manual/fr/ref.array.php

// Ajouter au début
array_unshift($prenoms, 'Romain');

// Supprimer le premier
array_shift($prenoms);

// Supprimer le dernier
array_pop($prenoms);

var_dump($prenoms);


for ($i = 0; $i < count($prenoms); $i++) {
    $prenom = $prenoms[$i];
    var_dump($prenom);
}

foreach ($prenoms as $prenom) {
    var_dump($prenom);
}

