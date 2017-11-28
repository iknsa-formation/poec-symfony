<?php
require_once "namespace1.php";
require_once "namespace2.php";

use monEspace1 as A;
use monEspace2 as B;

$personne = new A\Personne;

$personne->setPrenom("Moussa");
$personne->setNom("Camara");
$personne->setAge("28");
$personne->setTaille("1");

echo " ==> namespace 1 <br />";
$personne->getNom()."<br />";
$personne->getPrenom()."<br />";
$personne->getAge()."<br />";
$personne->getTaille()."<br />";

?>
