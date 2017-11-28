<?php

namespace personne2;

class Personne{
	private $nom;
	private $prenom;
	private $age;
	private $sexe;
	private $couleur;

	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function getAge(){
		return $this->age;
	}
	public function getSexe(){
		return $this->sexe;
	}
	public function getCouleur(){
		return $this->couleur;
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
	public function setSexe($sexe){
		$this->sexe = $sexe;
	}
}

?>