<?php
class Article 
{
    public $_titre = "j'aime les objets";
    public $_auteur = "mon nom";

    const NOMBRE_DE_PAGE = 200;
    
    public function afficheTitre() {
        return $this->_titre;
    }
    
    public function afficheAuteur(){
        return $this->_auteur;
    }
}

echo 'Mon article fait '.Article::NOMBRE_DE_PAGE.' pages';

$article = new Article();

var_dump($article);

echo 'Titre: '.$article->_titre.'<br/>';
echo 'Auteur: '.$article->_auteur.'<br/>';

echo $article->afficheTitre().'<br/>';
echo $article->afficheAuteur();
?>