<?php
	class Article{
		public $titre = "Deals";
		public $auteur = "John";
		const NOMBRE_DE_PAGES = 200;

		public function getTitre(){
			return $this->titre;
		}
		public function getAuteur(){
			return $this->auteur;
		}
		public function setAuteur($_auteur){
			$this->auteur = $_auteur;
		}
		public function setTitre($_titre){
			$this->titre = $_titre;
		}
	}

	class Personne{
		public $nom;
		public $prenom;
		public $age;

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

	/*$unArticle = new Article();
	echo "<p> Titre : ".$unArticle->titre."</p>";
	echo "<p> Auteur : ".$unArticle->auteur."</p>";
	echo "<p> nombre de pages : ".$unArticle::NOMBRE_DE_PAGES."</p>";
	echo "<p> méthode getTitre : ".$unArticle->getTitre()."</p>";
	echo "<p> méthode getAuteur : ".$unArticle->getAuteur()."</p>";
	echo "<p> set getTitre : ".$unArticle->setTitre("Headset")."</p>";
	echo "<p> set getAuteur : ".$unArticle->setAuteur("Malcom")."</p>";
	echo "<p> méthode getTitre : ".$unArticle->getTitre()."</p>";
	echo "<p> méthode getAuteur : ".$unArticle->getAuteur()."</p>";*/
	$unePersonne = new Personne();
	$unePersonne->setNom("MOHAMED OMAR");
	$unePersonne->setPrenom("Abdillah");
	$unePersonne->setAge(26);
	echo "<p> méthode getNom : ".$unePersonne->getNom()."</p>";
	echo "<p> méthode getPrenom : ".$unePersonne->getPrenom()."</p>";
	echo "<p> méthode getAge : ".$unePersonne->getAge()." ans</p>";
?>