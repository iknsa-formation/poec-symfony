<?php
namespace monEspace1;
class Personne
{
/**
*@var string*/
private $nom;

/**
*@var string*/
private $prenom;

/**
*@var int*/
private $age;


public function getPrenom()
{
  return $this->prenom;
}
public function setPrenom($Prenom)
{
  return $this->prenom=$prenom;
}
public function getNom()
{
  return $this->nom;
}
public function setNom($Nom)
{
  return $this->nom=$nom;
}

public function getAge()
{
  return $this->age;
}
public function setAge($age)
{
  if (!is_int($age)){
    var_dump("the age must be an integer");
    die;
  }
   $this->age=$age;
   return $this;
}
}
?>
