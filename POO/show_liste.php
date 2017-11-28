<?php
class ArticleManager {

		public function getArticle()
		{
			$db = new PDO("mysql:host=localhost;dbname=aston",'root','');

			$sql = $db->query('SELECT * FROM `article`');
			while($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
		echo "ID: ". $row['id']."<br/>";
		echo "Titre: ". $row['titre']."<br/>";
		echo '<img src="'.$row['image'].'" alt= "" /><br/>' ;
		echo "Date:". $row['creatAT']."<br/>";
		echo "Message:". $row['message']."<br/>";
		}
	}
}
echo"<h1>recuperation de mon table</h1>";
		$article = new ArticleManager();
		$article->getArticle(["titre" => "", "auteur" => "", "image" => "", "message" => "" 
]);

?>