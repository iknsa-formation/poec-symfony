<?php
include 'DAO/DAO.php';
class ArticleManager{
    public function create(array $article)
    {
        /** faire les contrôle nécessaire pour vérifier qu'on a bien toutes les infos */
        $db = (new DAO)->connect();
        $addArticle = $db->prepare("INSERT INTO `article` (`titre`, `auteur`, `createdAt`, `image`, `message`) VALUES (:titre, :auteur, NOW(), :image, :message)");
        $addArticle->bindValue(':titre', $article["titre"]);
        $addArticle->bindValue(':auteur', $article["auteur"]);
        $addArticle->bindValue(':image', $article["image"]);
        $addArticle->bindValue(':message', $article["message"]);
        if (!$addArticle->execute()) die('Unable to create article');
        $addArticle->closeCursor();
    }
    public function read()
    {
        $db = (new DAO)->connect();
       // return $db->query('SELECT * FROM `users`')->fetchAll();
        $listArticle = $db->prepare("SELECT *  FROM article");
        
        if (!$listArticle->execute()){
        	die('Unable to show list article');
        }
       /* while($row = $listArticle->fetch(PDO::FETCH_ASSOC))
        {
        	echo "ID: ". $row['id']."<br/>";
        	echo "Titre: ". $row['titre']."<br/>";
        	echo '<img src="'.$row['image'].'" alt="" /><br/>';
        	echo "Date: ".$row['createdAt']."<br/>";
        	echo "Message: ".$row['message']."<br/>";
        }*/
    }
    public function getArticle($article_id)
    {
        $db = (new DAO)->connect();
        $ARTICLE = $db->prepare('SELECT * FROM article WHERE id=:id');
        $ARTICLE->bindValue(':id', $article_id);
        $ARTICLE->execute();
        $article = $ARTICLE->fetch(PDO::FETCH_ASSOC);
        $ARTICLE->closeCursor();
        //return new ArticleManager($article);
    }
    public function update(array $article)
    {
        $db = (new DAO)->connect();
        $updateArticle = $db->prepare('UPDATE article SET titre=:titre,
            auteur=:auteur, image=:image, message=:message WHERE id=:id');
        $updateArticle->bindValue(':id', $article["id"]);
        $updateArticle->execute();
         while($row = $updateArticle->fetch(PDO::FETCH_ASSOC))
        {
            echo "ID: ". $row['id']."<br/>";
            echo "Titre: ". $row['titre']."<br/>";
            echo '<img src="'.$row['image'].'" alt="" /><br/>';
            echo "Date: ".$row['createdAt']."<br/>";
            echo "Message: ".$row['message']."<br/>";
        }
        $updateArticle->closeCursor();
    }
}