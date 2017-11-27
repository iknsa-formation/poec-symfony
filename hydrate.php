<?php
class Article
{
	protected $titre;
	protected $auteur;
	protected $date;
	protected $image;
	protected $message;
	public function __construct(array $data = [])
	{
		$this->hydrate($data);
	}
    public function hydrate(array $table)
    {
	    foreach ($table as $property => $value) 
	    {
		$method = 'set' . ucfirst($property);
		    if (method_exists($this, $method)) 
		    {
			$this->$method($value);
		    }
	    }
    }
    public function setTitre($titre)
	{
		return $this->titre=$titre;
	}
    public function getTitre()
	{
		return $this->titre;
	}
	public function setAuteur($auteur)
	{
		return $this->auteur=$auteur;
	}
	public function getAuteur()
	{
        return $this->auteur;
	}
	public function setDate($date)
	{
		return $this->date=$date;
	}
	public function getDate()
	{
        return $this->date;
	}
	public function setImage($image)
	{
		return $this->image=$image;
	}
	public function getImage()
	{
        return $this->image;
	}
	public function setMessage($message)
	{
		return $this->message=$message;
	}
	public function getMessage()
	{
        return $this->message;
	}
}
$test = new Article();
echo "Start of the first object without parameter";
var_dump($test);
echo "End of the first object";

$test1 = new Article(['titre'=>"Book1",'auteur'=>"Frederick",'date'=>"Janvier",'message'=>"html"]);
echo "Start of the second object with parameter";
var_dump($test1);
echo "End of the second object".'<br>'.'<br>';

$test2 = new Article(['titre'=>"Book1",'auteur'=>"Frederick",'date'=>"Janvier",'message'=>"html"]);
echo "Start of the third object with parameter".'<br>';
echo "Titre : ".$test2->getTitre().'<br>';
echo "Auteur : ".$test2->getAuteur().'<br>';
echo "Date : ".$test2->getDate().'<br>';
echo "Message : ".$test2->getMessage().'<br>';
echo "End of the third object".'<br>';
?>