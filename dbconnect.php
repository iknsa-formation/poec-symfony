<?php
class connection {
	private $connection_host = 'localhost';
	private $connection_dbname = 'pdo';
	private $connection_pseudo = 'root';
	private $connection_mdp = '';


	public function connection() {
		try{
			$dbConnection = new PDO('mysql:host=localhost;dbname=pdo','root','');
			echo "connection reussi";
		}
		catch(PDOException $e){

			echo "probleme de connection a la base de donnée";
		}

		return $dbConnection;

	



	$req = $dbConnection->prepare('INSERT FROM pdo (titre,auteur,nom)VALUE(:titre,:auteur,:nom)');
	$req->bindValue(':titre',$titre);
	$req->bindValue(':auteur',$auteur);
	$req->bindValue(':nom',$nom);


	
	if(!$req->execute()){
		die("l'article n'est pas crée");
	}
	else{
		echo "Inserte reussi";
	}
var_dump($req);
	
	$db = new PDO('mysql:host=localhost;dbname=pdo','root','');
	$sql = $db->query('SELECT * FROM pdo');
	
	while($row=$sql->fetch(PDO::FETCH_ASSOC)){
		echo "titre".$row['titre']."</br>";
		echo "auteur".$row['auteur']."</br>";
		echo "nom".$row['nom']."</br>";
	}
		
}
	
	
}

$connection = new connection();





?>