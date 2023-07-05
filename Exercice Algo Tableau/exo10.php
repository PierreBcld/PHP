<?php
// Ecrire un algorithme permettant de modifier un élément dans un tableau.

$character = array("beurre","farine","cereales","sel","sucre");
$modif = array("fromage", "viande");
print_r(array_replace($character, $modif));
?>