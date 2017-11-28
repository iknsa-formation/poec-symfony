<?php
//include model.php
class Article
{
protected $titre;
protected $auteur;
protected $date;
protected $image;
protected $message;
}

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

public function setAuteur($auteur)
{
  return $this->auteur=$auteur;
}
public function getAuteur($auteur)
{
  return $this->auteur;
}

public function setDate($date)
{
  return $this->date=$date;
}
public function getDate($date)
{
  return $this->date;
}

public function setImage($image)
{
  return $this->image=$image;
}
public function getImage($image)
{
  return $this->image;
}

public function setMessage($message)
{
  return $this->message=$message;
}
public function getMessage($message)
{
  return $this->message;
}


$test = new Article();
echo "Début du premier objet sans paramètre <br />";
  var_dump(test);
  echo "Fin du premier objet <br />";

$test1 = new Article([
  "titre" => "toto",
  "auteur" => "victor",
  "date" => "11-10-2017",
  "image" => "lion",
  "message" => "toto découvre la vie des animaux sauvages")];
  echo "Début du deuxième objet sans paramètre <br />";
    var_dump(test1);
      echo "Fin du deuxième objet <br />";


  ?>
