<?php
class Article {

	protected $titre;
	protected $auteur;
	protected $date;
	protected $image;
	protected $message;

// On appele à mon constructeur. Rendre une classe operationnelle. il appel à l'hydrate
	public function __construct(array $data = [])
	{
		$this->hydrate($data);
	}

//Hydration
	public function hydrate(array $table)
	{
		//var_dump($table);die;
		// on fait un boucle avec mon methode et set pour modifier mes attributs
		foreach ($table as $property=> $value){
			$method = 'set' . ucfirst($property);
			// function de verification si la methode existe ou pas
			if(method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}
	public function setTitre($titre)
	{
		return $this->titre = $titre;
	}
	public function getTitre()
	{
		return $this->titre;
	}
	public function setAuteur($auteur)
	{
		return $this->auteur = $auteur;
	}
	public function getAuteur()
	{
		return $this->auteur;
	}
	public function setDate($date)
	{
		return $this->date = $date;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function setImage($image)
	{
		return $this->image = $image;
	}
	public function getImage()
	{
		return $this->image;
	}	
	public function setMessage($message)
	{
		return $this->message = $message;
	}
	public function getMessage()
	{
		return $this->message;
	}
}

$test = new Article();
echo"Debut du premier objet sans parametre";
echo '<br/>';
echo "fin de mon premier objet";
echo '<br/>';

//-------------------------------
$test1 = new Article([
	'titre' => "Les moutons",
	'auteur' => "Veronica",
	'message'=> "J'aime les moutons"
]);
echo '<br/>';
echo "Debut du deuxieme objet avec parametre <br/>";
var_dump($test1);
echo 'Titre: '.$test1->getTitre().'<br/>';
echo 'Auteur: '.$test1->getAuteur().'<br/>';
echo 'Message: '.$test1->getMessage().'<br/>';
echo "Fin de mon deuxième objet";
echo '<br/>';
echo '<br/>';
//-----------------------------------------------

$test2 = new Article([
	'titre' => "Les fruits tropicales",
	'auteur' => "Moussa",
	'message'=> "La pomme est mon fruit favoris",
	'image'=> "<img src='POO/img/oufs.gif'/>"
]);
echo "Debut du troixième objet avec parametre <br/>";
echo '<br/>';
echo 'Titre: '.$test2->getTitre().'<br/>';
echo 'Auteur: '.$test2->getAuteur().'<br/>';
echo 'Message: '.$test2->getMessage().'<br/>';
echo 'Image: '.$test2->getImage()."<img src='POO/img/oufs.gif'/>".'<br/>';
echo "Fin de mon troisième objet avec parametre <br/>";
echo '<br/>';

?>