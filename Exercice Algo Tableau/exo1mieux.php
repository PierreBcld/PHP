<?php
$tab =  [];
$tabLength = intval(readline("Saisissez une taile de tableau : "));

for ($i = 1; $i <= $tabLength; $i++) {
    $val = intval(readline("Valeur " . $i . " 😊 : "));
    $tab[$i] = $val;
};

$sum = array_sum($tab);
echo ("la somme est : " . $sum);
