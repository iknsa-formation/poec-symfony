<?php 
	/**
	* 
	*/
	require 'Bd.php';
	class UsersManager extends Bd{
		private $bd;
		public function __construct (){
			$this->bd = new Bd();
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
		public function selectUsers(){
			$users = $this->bd->prepare("select * from users");
			$users->execute();
			return	$users;
		}
		public function afficherUsers(){
			$user = $this->selectUsers();

			foreach ($user as $key => $row) {
				echo '<p>Firstname : '.$row['firstname'].'</p>';
				echo '<p>Lastname : '.$row['lastname'].'</p>';
			}
		}
	}
	//
	$art = new UsersManager();

	//$art->insertUser(["firstname"=>"Dalton","lastname"=>"Djo","adresse"=>"918 stephen avenue","fonction"=>"Lead dev"]);
	$art->afficherUsers();
?>