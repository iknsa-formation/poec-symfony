<?php

class ArticleManager {

	public function addArticle(array $article)
	{
		$db = new PDO("mysql:host=localhost;dbname=aston",'root','');

		$ADD_ARTICLE = $db->prepare("
			INSERT INTO `article`(`titre`,`auteur`,`creatAT`,`image`,`message`) VALUES(:titre,:auteur,NOW(),:image,:message)");

	$ADD_ARTICLE->bindValue(':titre', $article["titre"]);	
	$ADD_ARTICLE->bindValue(':auteur', $article["auteur"]);
	$ADD_ARTICLE->bindValue(':image', $article["image"]);
	$ADD_ARTICLE->bindValue(':message', $article["message"]);

	//
	if (!$ADD_ARTICLE->execute())
	{

		die('Unable to create article');
	} else{
	echo "insertion ok";	
		}
	$ADD_ARTICLE->closeCursor();

	}
}
echo"<h1>Creation d'un utilisateur</h1>";

$article = new ArticleManager();

$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$image = $_POST['image'];
$message = $_POST['message'];

$article->addArticle(["titre" => $titre, "auteur" => $auteur, "image" => $image, "message" => $message]);

?>