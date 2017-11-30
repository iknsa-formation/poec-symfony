<?php

include 'DAO/DAO.php';

//CREATION C R U D

// CREATE (Creer ma base de données)
class ArticleManager {
	public function create(array $article)
	{
/** faire les controle nécessaire pour vérifier qu'on a bien toutes Les infos; 
 */
$db = (new DAO)->connect();
//Preparer ma rêquete 
	$ADD_ARTICLE = $db->prepare("
			INSERT INTO `article`(`titre`,`auteur`,`creatAT`,`image`,`message`) VALUES (:titre,:auteur,NOW(),:image,:message)");
	//Recuperer 
	$ADD_ARTICLE->bindValue(':titre', $article["titre"]);	
	$ADD_ARTICLE->bindValue(':auteur', $article["auteur"]);
	$ADD_ARTICLE->bindValue(':image', $article["image"]);
	$ADD_ARTICLE->bindValue(':message', $article["message"]);

	//Verification
	if (!$ADD_ARTICLE->execute()) die('Unable to create article');
	// Fermer la connection
	$ADD_ARTICLE->closeCursor();
	}


/* READ - Affichier la liste et montrer la liste */
public function read()
{
	$db = (new DAO)->connect();
	
	// return $db->('SELECT *FROM article')->fetchALL();

	$listArticle = $db->prepare("SELECT * FROM article");
	while($row = $listArticle->fetch(PDO::FETCH_ASSOC))
		{
		echo "ID: ". $row['id']."<br/>";
		echo "Titre: ". $row['titre']."<br/>";
		echo "Auteur:". $row['auteur']."<br/>";
		echo "Date:". $row['creatAT']."<br/>";
		echo '<img src="'.$row['image'].'" alt= "" /><br/>';
		echo "Message:". $row['message']."<br/>";
		}

	if (!$listArticle->execute()){
		die('Undable to show list article');
	}
}

/*
// UPDATE (mettre à jour) 

public function update(article $id)
{
	$db = (new DAO)->connect();

	$miseJour = $this->_db->prepare('UPDATE article SET titre = :titre, auteur = :auteur,creatAT = NOW(), image = :image, message = :message) WHERE id = $id ');

  	$ADD_ARTICLE->bindValue(':id', $article["id"]);
    $ADD_ARTICLE->bindValue(':titre', $article["titre"]);	
	$ADD_ARTICLE->bindValue(':auteur', $article["auteur"]);
	$ADD_ARTICLE->bindValue(':image', $article["image"]);
	$ADD_ARTICLE->bindValue(':message', $article["message"]);
   
    $miseJour->execute();

  }

*/


/* DELETE */








}



?>