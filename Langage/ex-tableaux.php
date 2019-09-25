<?php
const NB_ELEMENTS = 10;
// define('NB_ELEMENTS', 10);

// 1 - Créer un tableau avec 100 entiers aléatoires entre 0 et 10
$entiersAlea = [];

for ($i = 0; $i < NB_ELEMENTS; $i++) {
    $entiersAlea[] = mt_rand(0, 10);
}

echo "2 - Afficher les éléments du tableaux dans l'ordre\n";
// 2 - Afficher les éléments du tableaux dans l'ordre
foreach ($entiersAlea as $entierAlea) {
    var_dump($entierAlea);
}

echo "3 - Afficher les éléments du tableaux en partant de la fin\n";
// 3 - Afficher les éléments du tableaux en partant de la fin
//for ($i = count($entiersAlea) - 1; $i >= 0; $i--) {
//    var_dump($entiersAlea[$i]);
//}
foreach (array_reverse($entiersAlea) as $entierAlea) {
    var_dump($entierAlea);
}

// 4 - Afficher le nombre de valeurs paires et impairs
echo "4 - Afficher le nombre de valeurs paires et impairs\n";
$nbPairs = 0;
foreach ($entiersAlea as $entierAlea) {
    if ($entierAlea % 2 === 0) {
        $nbPairs++;
    }
}
$nbImpairs = NB_ELEMENTS - $nbPairs;
echo "Il y a $nbPairs pairs élements\n";
echo "Il y a $nbImpairs impairs élements\n";

// 5 - Faire la somme de tous les éléments du tableau 
echo "5 - Faire la somme de tous les éléments du tableau\n";
//$somme = 0;
//foreach ($entiersAlea as $entierAlea) {
//    $somme += $entierAlea;
//}
$somme = array_sum($entiersAlea);
echo "La somme est $somme\n";

// 6 - Afficher le plus grand et le plus petit nombre du tableau
//$min = 10;
//$max = 0;
//foreach ($entiersAlea as $entierAlea) {
//    $min = ($entierAlea < $min) ? $entierAlea : $min;
//    $max = ($entierAlea > $max) ? $entierAlea : $max;
//}

$min = min($entiersAlea);
$max = max($entiersAlea);
echo "La minimum est $min\n";
echo "La maximum est $max\n";

// 7 - Trier le tableau
sort($entiersAlea);

// 8 - Dédoublonner le tableau
//$entiersAleaDedoublonne = [];
//foreach ($entiersAlea as $entierAlea) {
//    if (!in_array($entierAlea, $entiersAleaDedoublonne)) {
//        $entiersAleaDedoublonne[] = $entierAlea;
//    }
//}
$entiersAleaDedoublonne = array_unique($entiersAlea);
var_dump($entiersAleaDedoublonne);