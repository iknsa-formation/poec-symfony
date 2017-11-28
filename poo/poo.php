<?php
class Article {
  public $_titre = "J'aime les objets";
  public $_auteur = "Moussa camara";
  const NOMBRE_DE_PAGES = 200;

  public function afficheTitre()
  {
    return $this->_titre;
  }

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

$article = new Article();

$article->_titre = "je change de titre";
echo ($article->_titre);
echo "<br/ >";
$article->setTitre("J'aime beaucoup les objets");
print $article-> getTitre();
echo "<br/ >";
$article->setAuteur("Toto");
print $article-> getAuteur();

?>
