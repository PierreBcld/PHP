<?php
// Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce nombre est positif ou négatif.
// on inclut cette fois le traitement du cas où le nombre vaut zéro.

//Variales
//$nombre : entier

// Début
$nombre = intval(readline("Veuillez indiquer un nombre : ")) . "\n";
if ($nombre <= 0) {
    echo ("Ce nombre est négatif.");
} else echo ("Ce nombre est positif.");
