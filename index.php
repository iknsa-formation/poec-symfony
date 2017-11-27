<?php




require_once "personne1.php";
use personne1 as A;



$personne1 = new A\Personne();
echo $personne1->nom.'</br>';
echo $personne1->age.'</br>';
echo $personne1->prenom.'</br>';








class Article{
	public $Nom;
	public $Titre ;
	public $Auteur;
	
	public function __construct(array $valeur = []){
			$this->hydrate ($valeur);
	}
	
	public function hydrate (array $donnees){
		foreach ($donnees as $attribut => $valeur){
			$methode = 'set'.ucfirst($attribut);
			
			
		}
	}

	
	public function getNom(){
		return $this->Nom;
	}
	
	public function setNom($nom){
		return $this->Nom=$nom;
	}
	
	public function getTitre(){
		return $this->Titre;
	}
	
	public function setTitre($titre){
		return $this->Titre=$titre; 
	}
	
	public function getAuteur(){
		return $this->Auteur;
	}
	
	public function setAuteur($auteur){
		return $this->Auteur=$auteur;
	}
}

$test2 = new Article([
	"Nom"=>'julie',
	"Titre"=>'une histoire bleue',
	"Auteur"=>'marc',
]);
	echo $test2->getTitre()."</br>";
	var_dump($test2);

?>




