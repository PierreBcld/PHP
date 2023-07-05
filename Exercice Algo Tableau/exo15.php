<?php
// Ecrire un algorithme permettant de fusionner les éléments de deux tableaux T1 et T2 dans un autre tableau T.     N : nbre des élmts du tableau T1 M : nbre des élémts du tableau T2

// Tableau 1
$character1 = array("beurre","farine","cereales","sel","sucre");

// Tableau 2
$character2 = array("citron","fraise");

// Fusion
$characterfusion = array_merge($character1, $character2);
print_r($characterfusion);
?>