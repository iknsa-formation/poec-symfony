<?php
require_once "data.php";
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['fonction']));

if (count($_POST)>0){

	$prenom = $_POST['firstname'];
	$nom = $_POST['lastname'];
	$adresse = $_POST['adresse'];
	$fonction =$_POST['fonction'];

	echo "prenom:".$prenom."<br/>";
	echo "nom:".$nom."<br/>";
	echo "adresse:".$adresse."<br/>";
	echo "fonction:".$fonction."<br/>";

	$sql = "INSERT INTO users(firstname,lastname,adresse,fonction) VALUES('".$prenom."','".$nom."','".$adresse."','".$fonction."')";

	$insert = mysqli_query($connection, $sql);

	if($insert)
	{
		echo "vous avez ete ajouter";
	}
	else{
		echo "error vous navez pas ete ajouter";
	}
	mysqli_close($connection);
}
?>

<div id="select"><?php


// requête SQL qui compte le nombre total d'enregistrement dans la table et qui



//récupère tous les enregistrements
$select = "SELECT firstname,lastname,adresse,fonction FROM users";

$result = mysqli_query($connection,$select) or die ('Erreur: '.mysql_error() );

$total = mysqli_num_rows($result);



// si on a récupéré un résultat on l'affiche.

if($total) {

	// debut du tableau

	echo '<table>'."\n";

	// première ligne on affiche les titres prénom et nom dans 2 colonnes

	echo '<tr>';

	echo '<td><b><u>prenom</u></b></td>';

	echo '<td><b><u>nom</u></b></td>';

	echo '<td><b><u>Adresse</u></b></td>';

	echo '<td><b><u>fonction</u></b></td>';

	echo '</tr>'."\n";



	// lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.  
	while($row = mysqli_fetch_assoc($result)){


		echo '<tr>';


		echo '<td>'.$row["firstname"].'</td>';

		echo '<td>'.$row["lastname"].'</td>';

		echo '<td>'.$row["adresse"].'</td>';

		echo '<td>'.$row["fonction"].'</td>';

		echo '</tr>'."\n";


	}

	echo '</table>';
	//fin du tableau
}

else echo 'Pas d\'enregistrements dans cette table...';


// on libère le résultat

mysqli_free_result($result);
	?></div>
