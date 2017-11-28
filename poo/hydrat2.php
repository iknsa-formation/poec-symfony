<?php

//include model.php
protected $titre;
protected $auteur;
protected $date;
protected $image;
protected $message;

public function __construct(array $data = [])
{
  $this->hydrate($data);
}

public function hydrate(array $table)
{
  foreach ($table as $property => $value){
    $method = "set" . ucfirst($property);
    /*function de verif si la methode existe ou pas*/
    if(methode_exist($this, $method)){
      $this->$method($value);
    }
  }
}
public function setTitre($titre)
{
  return $this->titre=$titre;
}
public function getTitre($titre)
{
  return $this->titre;
}

$test = new Article();
echo "Début du premier objet sans paramètre <br />";
  var_dump(test);
  echo "Fin du premier objet <br />";
$test1 = new Article([
  "titre" => "toto",


  ?>
