<?php

// un opérateur est un symbole qui permet
// de réaliser une opération

// opérateur d'affectation
// permet d'écrire dans une variable
// se lit de droite à gauche
// s'utilise sur n'importe quel type
$prenom = 'Romain';

// opérateurs arithmétiques (math)
$addition = 1 + 2;
$multiplication = 1 * 2;
$soustraction = 1 - 2;
$division = 1 / 2;
$modulo = 1 % 2;

// opérateurs de comparaison (tests)
// le résultat est booléen

// test d'égalité
var_dump($addition == 3); // true
var_dump(3 == $addition); // true
var_dump($addition == '3'); // true

// test d'égalité stricte
var_dump($addition === 3); // true
var_dump(3 === $addition); // true
var_dump($addition === '3'); // false

// test d'inégalité
var_dump($addition != 3); // false

// test d'inégalité stricte
var_dump($addition !== 3); // false

// test supérieur, inférieur...
var_dump($addition > 3); // false
var_dump($addition >= 3); // true
var_dump($addition < 3); // false
var_dump($addition <= 3); // false