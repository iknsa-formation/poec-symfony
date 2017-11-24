<?php

namespace monEspace2;
class Personne{
		
	private $nom;
	private $prenom;

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
}
?>