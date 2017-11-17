<?php
	require_once "db.php";

	$prenom = $_POST["firstname"];
	$nom = $_POST["lastname"];
	$adresse = $_POST["adresse"];
	$fonction = $_POST["fonction"];

if(count($_POST>0)){
	echo "Prénom: ".$prenom."<br>";
	echo "Nom: ".$nom."<br>";
	echo "Adresse: ".$adresse."<br>";
	echo "Fonction: ".$fonction."<br>";


	// vpour vérifier si existe déjà en base

	$isExist = "select lastname from  user where lastname='".$nom."'";
	$exist = mysqli_query ($connection,$isExist);

	//détermine le nombre de lignes du jeu de résultats

	$var = mysqli_num_rows($exist);

	if ($var > 0) {
		echo "<div class='alert alert-danger' role='alert'>
				Cet utilisateur existe déjà!
					</div>";
	} else {


// insertion base de données

$sql = "INSERT INTO user(firstname,lastname,adresse,fonction)
 VALUES('".$prenom."','".$nom."','".$adresse."','".$fonction."')";

 //ar_dump($sql);die;

$insert = mysqli_query ($connection,$sql);
// retourne un boolean

if($insert) {
    echo "<div class='alert alert-success' role='alert'
          Lutilisateur $prenom $nom a été joué en base !
          </div>";
} else {
    echo "<div class='alert alert-danger' role='alert'>
          Oups ! insertion échouée
            </div>";
}
mysqli_close($connection);
}
}

?>
