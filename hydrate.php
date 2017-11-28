<?php
	/**
	* 
	*/
	class Article{
		public $titre;
		public $auteur;
		function __construct(array $tab=[])
		{
			$this->hydrate($tab);
		}
		function hydrate($tab){
			foreach ($tab as $key => $value) {
				$methode = 'set'.ucfirst($key);
				if(method_exists($this,$methode)){
					$this->$methode($value);
				}else{
					//echo "KO";die();
				}
			}
		}
		function setTitre($titre){
			$this->titre = $titre;
		}
		function setAuteur($auteur){
			$this->auteur = $auteur;
		}
		function getTitre(){
			return $this->titre;
		}
		function getAuteur(){
			return $this->auteur;
		}
	}
	$art = new Article();
	echo "Instatiation à vide : ";
	var_dump($art);
	echo "<p>".$art->getTitre()."</p>";
	echo "<p>".$art->getAuteur()."</p>";

	$art->hydrate(["titre"=>"Le commun des mortels","auteur"=>"Bertrand le Roi"]);
	echo "hydrate : ";
	var_dump($art);

?>