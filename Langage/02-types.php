<?php

$prenom = 'Romain';
var_dump($prenom);

// string -> chaine de caractères -> texte
var_dump('Romain'); // string

// integer -> nombre entier
var_dump(33);

// float -> nombre à virgule
var_dump(3.14);

// boolean -> booléen
// 2 valeurs possibles :
// true -> vrai
// false -> faux
var_dump(true);
var_dump(false);

// array -> tableau
var_dump(['Romain', 'Eric']); // array


// Conversion
var_dump((bool) 'Hello');
var_dump((boolean) 'Hello');

var_dump((int) '123');
var_dump((integer) '123');

var_dump((string) 123);


// String

$lien = "<a href=\"https://formation.tech/\">C'est mon site</a>";
$lien = '<a href="https://formation.tech/">C\'est mon site</a>';

$site = 'https://formation.tech/';
$libelle = "C'est mon site";

$lien = <<<DELI
<a href="https://formation.tech/">C'est mon site</a>
DELI; // fin de ma chaine de char

$lien = <<<DELI
<a href="$site">$libelle</a>
DELI; // fin de ma chaine de char

$lien = <<<SQL
SELECT *
FROM contacts
WHERE id = :id
SQL;