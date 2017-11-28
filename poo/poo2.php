<?php
class Article {
  public $_titre = "J'aime les objets";
  public $_auteur = "Moussa camara";

  public function setTitre($_titre)
  {
    return $this->_titre=$_titre;
  }

  public function getTitre()
  {
    return $this->_titre;
  }
  public function setAuteur($_auteur)
  {
    return $this->_auteur=$_auteur;
  }
  public function getAuteur()
  {
    return $this->_auteur;
  }
}
//instanciation de l'objet
  $article = new Article();
  $article->setTitre("J'aime beaucoup les objets");
  print $article-> getTitre();
  echo "<br/ >";
  $article->setAuteur("Toto");
  print $article-> getAuteur();
  echo "<br/ >";
  echo "<br/ >";

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
      return $this->_age=$_age;
    }
    public function getAge()
    {
      return $this->_age;
    
    }
  }
  //instanciation de l'objet
    $article = new Personne();
    $article->setPrenom("Julie");
      echo "Je m'appelle ";
    print $article-> getPrenom();
  echo " ";
    $article->setNom("Lescaud");
    print $article-> getNom();
    echo ". Mon âge? ";
    $article->setAge("Ca ne se demande pas pour les dames.");
    print $article-> getAge();
  ?>
