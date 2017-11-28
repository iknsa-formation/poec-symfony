<?php
class Personne {
  public $_nom = "Mendy";
  public $_prenom = "Solange";
  public $_age = "34 ans";

  public function setNom($_nom)
  {
    return $this->_nom=$_nom;
  }
  public function getNom()
  {
    return $this->_nom;
  }

  public function setPrenom($_prenom)
  {
    return $this->_prenom=$_prenom;
  }
  public function getPrenom()
  {
    return $this->_prenom;
  }

  public function setAge($_age)
  {
    if (!is_int($_age)){
      echo "age doit être un chiffre";
      exit;
    }
     $this->age=$age;
    return $this;
  }
  public function getAge()

  {
    return $this->_age;
  }
}
//instanciation de l'objet
  $article = new Personne();
  $article->setPrenom("Julie");
  print $article-> getPrenom();
  echo "<br/ >";
  $article->setNom("Lescaud");
  print $article-> getNom();
  echo "<br/ >";
  $article->setAge("Ca ne se demande pas pour les dames");
  print $article-> getAge();
  ?>
