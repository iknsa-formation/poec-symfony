<?php
require_once "data.php";
//if (isset($_POST['prenom']) && isset($_POST['pseudo']) && isset($_POST['mot_de_passe']) && isset($_POST['email']));
if (count($_POST)>0){
	$prenom = $_POST['firstname'];
	$pseudo = $_POST['pseudo'];
	$email =$_POST['email'];
	$mot_de_passe = $_POST['password'];

	$query = "SELECT pseudo FROM users WHERE pseudo='".$pseudo."'";
	$resultat = mysqli_query($connection,$query);
	$row = mysqli_num_rows($resultat);
	$crypted = md5($mot_de_passe); 	
	
	if( $row >0 )
	{
		echo "ce pseudo est deja utilise";
	}
	else{
		$sql = "INSERT INTO users (firstname,pseudo,email,password) VALUES('".$prenom."','".$pseudo."','".$email."','".$crypted."')";

		if(mysqli_query($connection,$sql))
		{
			echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien inscrit, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=http://localhost/poec-symphony/index.php">
</div>';
		}
		else
		{
			echo "vous n'avez pas ete ajouter";
		}
	}

	mysqli_close($connection);
}

?>
