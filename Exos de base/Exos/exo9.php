<?php
// Ecrire un algorithme qui demande trois noms à l'utilisateur et l'informe ensuite s'ils sont rangés ou non dans l'ordre alphabétique

// Variables
// $nom1, $nom2, $nom3 : Chaine de charactères

// Début
$nom1 = intval(readline("Entrez le 1er nom : ")) . "\n";
$nom2 = intval(readline("Entrez le 2e nom : ")) . "\n";
$nom3 = intval(readline("Entrez le 3e nom : ")) . "\n";

if ($nom1 < $nom2 && $nom2 < $nom3) {
    echo ("Ces noms sont classés par ordre alphabétique");
} else echo ("Ces noms ne sont pas classés par ordre alphabétique");
