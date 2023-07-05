<?php
// Ecrire un algorithme permettant de saisir les données d’un tableau à deux dimensions (10,4), de faire 
// leur somme, produit et moyenne et de les afficher avec les résultats de calcul à l’écran.

$tableaudouble = array(
    $un = array("1","1","1","1","1","1","1","1","1","1"),
    $deux = array("2","2","2","2","2","2","2","2","2","2"),
    $trois = array("3","3","3","3","3","3","3","3","3","3"),
    $quatre = array("4","4","4","4","4","4","4","4","4","4")
);


echo "Somme de un  = " . array_sum($un) . "\n";
echo "Somme de deux  = " . array_sum($deux) . "\n";
echo "Somme de trois  = " . array_sum($trois) . "\n";
echo "Somme de quatre = " . array_sum($quatre) . "\n";
echo "Multiplication de un = " . $un[0] * $un[1] * $un[2] * $un[3] * $un[4] * $un[5] * $un[6] * $un[7] * $un[8]* $un[9] . "\n";
echo "Multiplication de deux = " . $deux[0] * $deux[1] * $deux[2] * $deux[3] * $deux[4] * $deux[5] * $deux[6] * $deux[7] * $deux[8]* $deux[9] . "\n";
echo "Multiplication de trois = " . $trois[0] * $trois[1] * $trois[2] * $trois[3] * $trois[4] * $trois[5] * $trois[6] * $trois[7] * $trois[8]* $trois[9] . "\n";
echo "Multiplication de quatre = " . $quatre[0] * $quatre[1] * $quatre[2] * $quatre[3] * $quatre[4] * $quatre[5] * $quatre[6] * $quatre[7] * $quatre[8]* $quatre[9] . "\n";
echo "Moyenne de un = " . array_sum($un)/10 . "\n";
echo "Moyenne de deux = " . array_sum($deux)/10 . "\n";
echo "Moyenne de trois = " . array_sum($trois)/10 . "\n";
echo "Moyenne de quatre = " . array_sum($quatre)/10;
?>