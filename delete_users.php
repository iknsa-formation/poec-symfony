<?php
require_once "data.php";
?>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <?php
if(isset($_GET['id'])){
	$id = $_GET["id"];
	


	$sql ="DELETE  FROM users WHERE id='".$id."'";
	$resultat1=mysqli_query($connection,$sql); 
	
	
	if(mysqli_query($connection,$sql)){
		echo '<div class="alert alert-dismissable alert-success">
  <strong>Yes !</strong> user supprimer, Redirection dans 1 secondes ! <meta http-equiv="refresh" content="5; URL=http://localhost/poec-symphony/connecter(list).php">
</div>';
	}
	else
		{
			echo "vous n'avez pas ete ajouter";
		}


// on ferme la connexion à la base
mysqli_close($connection);
}
?>
