<?php 
	class UsersManager{
		public $bd;
		public function __construct (){
			$this->bd = new PDO('mysql:host=localhost;dbname=poec-symfony', 'root', '');
		}
		public function insertUser($users){
			$USERS = $this->bd->prepare('INSERT INTO users(firstname,lastname,adresse,fonction) VALUES (:firstname,:lastname,:adresse,:fonction)');

			$USERS->bindValue(":firstname",$users["firstname"]);
			$USERS->bindValue(":lastname",$users["lastname"]);
			$USERS->bindValue(":adresse",$users["adresse"]);
			$USERS->bindValue(":fonction",$users["fonction"]);

			if($USERS->execute()){
				echo "OK";
			}else{
				echo "KOOOOOOOO!";
			}
		}
	}

	$art = new UsersManager();

	$art->insertUser(["firstname"=>"Dalton","lastname"=>"Djo","adresse"=>"918 stephen avenue","fonction"=>"Lead dev"]);
?>