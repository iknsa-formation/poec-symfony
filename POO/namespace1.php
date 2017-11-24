<?php

namespace monEspace1;

	class Personne {
	
	private $nom;
	private $prenom;
	private $age;
	private $taille;

	public function setNom($nom)
	{
		return $this->nom = $nom;
		
	}
	public function getNom()
	{
		return $this->nom;
	}

	public function setPrenom($prenom)
	{
		return $this->prenom = $prenom;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}

	public function setAge($age)
	{	if (!is_int($age)) {
			echo 'L\'age doit être un chifre';
			exit;
		}
			return $this->age = $age;
			
	}
	public function getAge()
	{
		return $this->age;
	}
	
	public function setTaille($taille)
	{	if (!is_int($taille)) {
			echo 'L\'age doit être un chifre';
			exit;
		}
			return $this->taille = $taille;
	}
	public function getTaille()
	{
		return $this->taille;
	}

}





?>