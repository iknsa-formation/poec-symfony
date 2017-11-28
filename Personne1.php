<?php

namespace personne1;

class Personne{
	private $nom;
	private $prenom;
	private $age;

	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function getAge(){
		return $this->age;
	}
	public function setNom($nom){
		$this->nom = $nom;
	}
	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}
	public function setAge($age){
		if(is_int($age)){
			$this->age = $age;
		}else{
			echo 'Age doit être un entier';
			die();
		}
	}
}

?>