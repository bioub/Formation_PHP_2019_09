<?php

$hello = str_replace('jour', 'soir', 'bonjour');
var_dump($hello); // bonsoir

// declaration
function hello() {
    
}

// appel
hello();
hello();
hello();

//       dump('Bonjour')
function dump($val) {
    var_dump($val);
}

var_dump(isset($val)); // false
dump('Bonjour'); // $var = 'Bonjour';
dump('Bonsoir'); // $var = 'Bonsoir';

function addition($nb1, $nb2) {
    return $nb1 + $nb2;
}

$somme = addition(1, 2);