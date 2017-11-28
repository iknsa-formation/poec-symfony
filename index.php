<?php
require_once "dbconnect.php";
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

			if(method_exists($this, $methode)){
				$this->$methode($valeur);
			}
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

$test = new Article();


$test2 = new Article([
	"Titre"=>'une histoire bleue',
	"Nom"=>'egard',

]);

echo $test2->getTitre()."</br>";
echo $test2->getAuteur()."</br>";
echo $test2->getNom()."</br>";

class form {
 
  private $data;
 
  public function __construct($data){
  	
	  $this->data = $data;
  }
	  
	  public function input($name){
		  echo '<input type="text" name="'.$name.'">';
	  	
	  }
	public function submit(){
		echo'<button type="submit">Envoyé</button>';
	}
  } 

$form = new form([
	array('username'=>'roger',)
]);

echo $form ->input('username')."</br></br>";
echo $form -> submit();









?>




