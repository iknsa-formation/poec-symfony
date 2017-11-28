<?php 

class Article{
	public $_titre = "J aime les objets";
	public $_auteur = "Moussa";
}
$article = new Article();
echo 'Titre : '. $article->_titre.'<br/>';
echo 'Auteur : '. $article->_auteur;

//---------------------------------------

class Article1{
	public $_titre = "J aime les objets";
	public $_auteur = "Moussa";

// l'acces aux constatens ne peut se faire qu'en lecture 
	const NOMBRE_DE_PAGES = 200;
}
echo 'Mon article fait ',Article1::NOMBRE_DE_PAGES,' pages'.'<br/>';

//--------------------------------------------------
class Article2{
	private $_titre = "J aime les objets";
	private $_auteur = " Camara";

	public function afficheTitre(){
		return $this->_titre;
	}
}
$article2 = new Article2();
	echo $article2->afficheTitre(),'<br/>';

//-----------------------------------------
/* Creation de notre premier objet. le "this" permet de designer l'objet dans lequel on se trouve */

class Article3{
	private $_titre = "J aime les objets";
	private $_auteur = " Moussa Camara";

	public function afficheAuteur(){
		return $this->_auteur;
	}
}

$article3 = new Article3();
	echo $article3->afficheAuteur().'<br/>';


//---------------------------------------------

	class Article4{ // ici je commence ma classe
	public $_titre = "J aime les objets";
	public $_auteur = "Moussa";

	public function setTitre($_titre) // modifier

	{
		return $this->_titre = $_titre;
	}
	public function getTitre() // recuperer
	{
		return $this->_titre;
	}

	public function setAuteur($_auteur)

	{
		return $this->_auteur = $_auteur;
	}
	public function getAuteur()
	{
		return $this->_auteur;
	}
	}// je ferme ma classe

	//Je cree mon objet quand je un new et pour instancer un objet 
	$article4 = new Article4(); // me cree mon objet
	$article4->setTitre('j aimme beaucoup, beaucoup les objets'); // modifier
	print $article4->getTitre(); // recuperer
	echo '<br/>';
	$article4->setAuteur('Veronica Ochoa');
	print $article4->getAuteur();
	echo '<br/>';
	echo '<br/>';

//  -------------------------
	// On define la classe personne avec nom, prenom, age
	class Personne{
	public $_nom;
	public $_prenom;
	public $_age;

	public function setNom($_nom)
	{
		return $this->_nom = $_nom;
	}
	public function getNom()
	{
		return $this->_nom;
	}

	public function setPrenom($_prenom)
	{
		return $this->_prenom = $_prenom;
	}
	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setAge($_age)
	{	if (!is_int($_age)) {
			echo 'L\'age doit être un chifre';
			exit;
		}
			return $this->_age = $_age;
	}
	public function getAge()
	{
		return $this->_age;
	}
	
}
	// On cree l'objet avec new et on fait le modificaions et on les recouperent
	$personne = new Personne();
	$personne->setNom('Ochoa');
	print $personne->getNom();
	echo '<br/>';

	$personne->setPrenom('Veronica');
	print $personne->getPrenom();
	echo '<br/>';

	$personne->setAge(35);
	print $personne->getAge();
	echo '<br/>';

//-----------------------------------------
/* Namespaces :

class Personne1{
//*@var string

private $nom;


//*@var string

private $nom;

//*@var int

private $age;
}

//----------------------------------------------

Namespace monEspace1;

	class Personne {
	

	private $nom;


	
	private $nom;

	

	private $age;


	private $taille;
}

//--------------------------------

Namespace monEspace2;
	
	class Personne {
		
		private $nom;


		

		private $nom;

}

//----------------------

//On cree mon objet à partir de mes deux espaces
require_once "namespace1.php";
require_once "namespace2.php";

use monEspace1 as A;
use monEspace2 as B;

$personne = new A\Personne;

$personne->setNom("Ochoa");
$personne->setPrenom("Veronica");
$personne->setAge(35);
$personne->setTaille(1.65);
print $personne->setAge();

*/
//----------------------


class Constructeur{

	public $couleur;
	function __construct()
	{
		$this->couleur = "blue";
	}
}
$couleur = new Constructeur;
	var_dump($couleur);
//$couleur = "blue";
//var_dump($couleur);

//------------------

// l'héritage
class Mere{
	public function parent(){
		$mere="Je suis la classe mère.";
		return $mere;
	}
}

class Fille extends Mere{
	public function enfant(){
		$fille="Je suis la classe Fille, j'herite de ma mere";
		return $fille;
	}
}

$objet =  new Fille();
echo $objet->parent(). "<br/>";
echo '<br/>';
echo $objet->enfant();
echo '<br/>';
echo '<br/>';

//--------------------------

class Mere1{
	public function parent1(){
		$mere1="Je suis la classe mère.";
		return $mere1;
	}
}

class Fille1 extends Mere1{
	public function parent1(){
/* Surchager la methode parent. */
		$mere1 = Mere1::parent1();
		// fin surchager
		$mere1.="Je suis la classe Fille, j'herite de ma mere";
		return $mere1;
	}
}

$objet =  new Fille1();
echo $objet->parent1(). "<br/>";


//-------------------------------------------------
// (principe de DRY)

class ArticleManager {

	public function(array $article)
	{
		$db = new PDO("mysql:host=localhost;dbname=aston",'root','');

		$ADD_ARTICLE = $db->prepare("
			INSERT INTO 'article' ('titre', 'auteur','creatAT', 'image', 'message') VALUES(:titre, :auteur, NOW(), :image, :message)");

	$ADD_ARTICLE->bindValue(':titre', $article["titre"]);	
	$ADD_ARTICLE->bindValue(':auteur', $auteur["auteur"]);
	$ADD_ARTICLE->bindValue(':image', $image["image"]);
	$ADD_ARTICLE->bindValue(':message', $message["message"]);

	//
	if (!$ADD_ARTICLE->execute())
	{

		die('Unable to create article');
	} else{
	echo "insertion ok";	
		}
	$ADD_ARTICLE->closeCursor();

	}
}
echo"<h1>Creation d'un utilisateur</h1>";
$article = new ArticleManager();
$article->addArticle(["titre" => "Le POO est cool !", "auteur" => "Veronica", "image" => "http://lespopines.l.e.pic.centerblog.net/o/7047f4e0.png" , "message" => "Bla bla bla" 
]);




?>

