<?php
require_once "DAO/DAO.php";

class ArticleManager{
	public function create(array $article){

		$db=(new DAO)->connect();


		$addArticle = $db->prepare("INSERT INTO article(auteur, nom, titre,image) VALUES (:auteur, :nom, :titre :image)");
		$addArticle->bindValue(':auteur', $article['auteur']);
		$addArticle->bindValue(':nom', $article['nom']);
		$addArticle->bindValue(':titre', $article['titre']);
		$addArticle->bindValue(':image', $article['image']);

		if(!$addArticle->execute())die("Impossible de crée l'article");
		$addArticle->closeCursor;
	}
}
?>