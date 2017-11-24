<?php

//On cree mon objet à partir de mes deux espaces
require_once "namespace1.php";
require_once "namespace2.php";

use monEspace1 as A;
use monEspace2 as B;

$personne = new A\Personne;
$personne->setNom("Ochoa");
$personne->setPrenom("Veronica");
$personne->setAge(25);
$personne->setTaille(1);

echo "====> namespace1 <br/>";
echo $personne->getNom().'<br/>';
echo $personne->getPrenom().'<br/>';
echo $personne->getAge().'<br/>';
echo $personne->getTaille().'<br/>';

//Affiche de monEspace2 et Creation d emon objet 2  
$personne2 = new B\Personne;
$personne2->setNom("Perez");
$personne2->setPrenom("Laura");

echo "====> namespace2 <br/>";
echo $personne2->getNom().'<br/>';
echo $personne2->getPrenom().'<br/>';

?>