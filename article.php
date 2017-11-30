<?php
include 'DAO/DAO.php';
class Article
{
   public function create(array $article)
   {
    $db = (new DAO)->connect();
   	
   	$addArticle = $db->prepare("INSERT INTO `test` (`titre`,`auteur`,`image`,`message`) VALUES (:titre,:auteur,:image,:message)");
   	$addArticle->bindValue(':titre',$article["titre"]);
    $addArticle->bindValue(':auteur',$article["auteur"]);
   	$addArticle->bindValue(':image',$article["image"]);
   	$addArticle->bindValue(':message',$article["message"]);
   	if (!$addArticle->execute())
     die('Unable to create an article.');
   		$addArticle->closeCursor();
   }  
   public function show()
    {
        $db = (new DAO)->connect();
        $showArticle = $db->prepare("SELECT *  FROM test");
        if (!$showArticle->execute())
        {
          die('Unable to show the list of articles');
        }
    }
}
?>

