<?php
// Ecrire un algorithme permettant de saisir et d’afficher N éléments d’un tableau.

// Initialisation
$tableau = [];
$tablength = intval(readline("Veuillez saisir une taille de tableau : "));

// Début
for ($i = 1; $i <= $tablength; $i++) {
    $val = intval(readline("Valeur : "));
    $tableau[$i] = $val;
};

echo ("Voici votre tableau : " . $tableau);
