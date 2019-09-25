<?php
//$capitales = ['Paris', 'Berlin', 'Madrid'];

$capitales = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin', 
    'Espagne' => 'Madrid'
];

echo "La capitale de la France est " . $capitales['France'] . "\n";
echo "La capitale de la France est $capitales[France]\n";

$user = [
    'prenom' => 'Romain',
    'nom' => 'Bohdanowicz',
];

$nomComplet = $user['prenom'] . ' ' . $user['nom'] . "\n";
$nomComplet = "$user[prenom] $user[nom]\n";

foreach ($capitales as $pays => $ville) {
    echo "La capitale de $pays est $ville";
}