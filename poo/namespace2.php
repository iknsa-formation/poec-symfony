<?php
namespace monEspace2;
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
private $zipcode;


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

public function getZipcode()
{
  return $this->zipcode;
}
public function setAge($zipcode)
{
  if (!is_int($zipcode)){
    var_dump("the hight must be an integer");
    die;
  }
   $this->zipcode=$zipcode;
   return $this;
}
}
?>
