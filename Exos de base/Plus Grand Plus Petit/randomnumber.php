<?php
// Algorithm qui génère un nombre aléatoire entre 1 et 100, qui demande un nombre à l’utilisateur,
// qui lui indique si celui-ci est plus grand ou plus petit,
// et qui affiche un message de succès une fois trouvé.

// Variables
// $nombreGenere, $nombreSaisi, $nombreDeCoups : entiers.

// Début
$nombreGenere = rand(1, 100);
echo ("Le nombre généré est : " . $nombreGenere) . "\n";
$nombreSaisi = intval(readline("Veuillez saisir un nombre entre 1 et 100 : ") . "\n");
$nombreDeCoups = 1;

while ($nombreSaisi != $nombreGenere) {
    $nombreDeCoups = $nombreDeCoups + 1;
    if ($nombreSaisi > $nombreGenere) {
        $nombreSaisi = intval(readline("Veuillez saisir un nombre plus petit : ") . "\n");
    } else {
        $nombreSaisi = intval(readline("Veuillez saisir un nombre plus grand : ") . "\n");
    }
}
echo ("Succès ! En : " . $nombreDeCoups . " coups.");
// Fin