<?php

function addition($nombre1, $nombre2) {
   $resultat=$nombre1 + $nombre2;
return $resultat;
}

echo addition(15,1).'<br>';

function soustraction($nombre1, $nombre2){
    $resultat=$nombre1 - $nombre2;
    return $resultat;
}
echo soustraction(10,15).'<br>';

function modulo($nombre1, $nombre2){
     $resultat=$nombre1 % $nombre2;
    return $resultat;
}
echo modulo(6,2).'<br>';
    
function division($nombre1, $nombre2){
    $resultat=$nombre1/$nombre2;
    return $resultat;
}
echo division (6,2).'<br>';

function multiplication($nombre1, $nombre2){
    $resultat=$nombre1* $nombre2;
}
echo multiplication (4,5).'<br>';



?>