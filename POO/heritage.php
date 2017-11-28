<?php
/*
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
echo '<br>'
*/
//----------------------------------------------
/*
class Fruit{

	public function tropical(){
		$fruit = "Je suis un fruit provenant de régions au climat tropical ou subtropical";
		return $fruit;
	}
}


class Exotique extends Fruit{
	public function comestible(){
		$exotique = "Je suis un fruit que ne supporte pas le froid, comme ma mère";
		return $exotique;
	}
}

$objet =  new Exotique();
echo $objet->tropical();
echo '<br/>';
echo $objet->comestible();
*/
//---------------------------------------------------------------------------------------

class Fruit{
	public function tropical(){
	$fruit = "Je suis un fruit provenant de régions au climat tropical ou subtropical";	
	$clima ="tropical";
	$habitat = "Amerique Latine";
	$famille = "goyavier";
		//return $fruit;
		//return $clima;
		return $habitat.'/'.$clima.'/'.$famille;
		//return $famille;
	}
}

class Exotique extends Fruit{
	
	public function comestible(){
		$exotique = "Je suis un fruit que ne supporte pas le froid, comme ma mère";
		$type ="guyave";
		$age = " je suis très ancienne j'ai 2000 ans.";
		return $exotique;
		//return $type;
		//return $age;
	}
}

$objet =  new Exotique();
echo $objet->tropical();
echo '<br/>';
//var_dump($objet);die;
echo $objet->comestible();

?>

