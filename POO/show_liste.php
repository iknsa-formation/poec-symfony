<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title></title>
</head>
<body>
	 
	<h1>Liste des articles</h1>
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
		echo "Auteur:". $row['auteur']."<br/>";
		echo "Date:". $row['creatAT']."<br/>";
		echo '<img src="'.$row['image'].'" alt= "" /><br/>';
		echo "Message:". $row['message']."<br/>";
		}
	}
}
echo"<h3>Recuperation de mon table</h3>";
		$article = new ArticleManager();
		$article->getArticle(["titre" => "", "auteur" => "", "image" => "", "message" => "" 
]);


?>

</body>
</html>
