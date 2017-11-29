<?php
require "DAO/parametes.php";
class DAO extends PDO{
	private $parametre =null;	
	public function __construc(){
		$this->parametre = (new Parametre())->get();
		if(
			!isset($this->parametre["dbhost"])||
			!isset($this->parametre["dbname"])||
			!isset($this->parametre["dbuser"])||
			!isset($this->parametre["dbpassword"]))
		{
			die("Il manque des informations pour se connecter à la base de donnée");
		}	
	
	 function connect(){
		try{
			return new PDO(
				'mysql:host=".$this->parametre["dbhost"].";dbname=".$this->parametre["dbname"].";dbuser=".$this->parametre["dbuser"].";dbpassword=".$this->parametre["dbpassword"]."'
			);
		}
		catch(Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}
}
}
?>