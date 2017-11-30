<?php

//Jamais commit cet fichier c'est très important!!!
require 'Parameters.php';

class DAO extends PDO
{
	private $parameters = null;

	public function __construct()
	{
		$this->parameters = (new Parameters())->get();
		if(
			!isset($this->parameters["db_host"]) ||
			!isset($this->parameters["db_name"]) ||
			!isset($this->parameters["db_user"]) ||
			!isset($this->parameters["db_pass"]) 
		) {

			die("Il manque le sinformations pour se connecter à la bdd");
		}
	}

	public function connect()
	{
		/*L'instruction try... catch regroup des instructions à exécuter et définit une réponse si l'une de ces instructions provoque une exception.
		 */
		try {
			return new PDO(
				"mysql:host=" . $this->parameters["db_host"] . ";dbname=" . $this->parameters["db_name"] . ";", $this->parameters["db_user"], $this->parameters["db_pass"]
			);

		} catch (\PDOException $e) {
			if (!$this->parameters["debug"]){
				exit("Unable to connect to db");
			} else {
				var_dump($e);
				exit("Unable to connet to db");
			}
		}
	}
}

?>