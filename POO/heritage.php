<?php
class Mere{
	public function parent(){
		$mere="Je suis la classe mere";
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
echo $objet->parent();
echo '<br/>';
echo $objet->enfant();



?>