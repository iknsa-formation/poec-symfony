<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>POO</h1>

<h3>La classe</h3>

<?php 
class Article{
	public $_titre = "J aime les objets";
	public $_auteur = "Moussa";
// l'acces aux constatens ne peut se faire qu'en lecture 
	const NOMBRE_DE_PAGES = 200;
}
echo 'Mon article fait'::NOMBRE_DE_PAGES,'phpges';


$article = new article();
echo 'Titre : '. $article->_titre.'<br/>';
echo 'Auteur : '. $article->_auteur;

?>



<div>

<?php/*
class NomDeMaClasse {

		// Attributs

		// Constantes

		// Methodes : il peut avoir d'un à plussieurs 
}
$variable = new NomDeMaClasse();

?>
</div>

<div>
	<?php/*
class voiture {
	const ROUGES_MOTRICES = 2;
	public $marque;
	function freiner($force_de_frenage){



		}

		
}
$variable = new NomDeMaClasse();*/

?>





</div>




</body>
</html>


