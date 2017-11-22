<?php
 require_once "db.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Formulaire etudiants</title>
</head>
<body>
	<?php
		//mettre dans un autre  fichier
		if (count($_POST) >0) {
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$fonction = $_POST['fonction']; 
			$telephone = $_POST['telephone'];
			$adresse = $_POST['adresse'];

			$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
			//var_dump($hash);die;
			$isExist ="select nom from etudiant where nom ='".$email."'";
			//var_dump($isExist);die;
			$exist = mysqli_query($connection,$isExist);
			/*  */
			/* Détermine le nombre de lignes du jeu de resultats*/
			$var = mysqli_num_rows($exist);
			//var_dump($var);die;
			if ($var > 0) {
				echo "<div class='alert alert-danger' role='alert'>";
			}else {
			/*
			* Instertion dans la base de données
			 */
			$sql = "INSERT INTO etudiant(nom, prenom, email, password, fonction, telephone, adresse) VALUES ('".$nom."','".$prenom."','".$email."','".$hash."','".$fonction."','".$telephone."','".$adresse."')";
				//var_dump($sql);die;
				/* Quand la rêquete est bonne j'efface var dump*/

			// conecction avec ma base de données et avec ma rêquete 
			$insert = mysqli_query ($connection, $sql);
			if ($insert) {
				echo "<div class='alert alert-success'role='alert'>ok Super!</div>";
			} else {
				echo "<div class='alert alert-danger' role='alert'>Oups! Insertion échoué</div>";
			}

			}
			/*
				echo $_POST['nom'];
				echo $_POST['prenom'];
				echo $_POST['email'];
				echo $_POST['password'];
				echo $_POST['fonction'];
				echo $_POST['telephone'];
				echo $_POST['adresse'];
			*/		
				/* 
					Pour faire la requete 
				*/
		
			//Se deconnecte 
			mysqli_close($connection);
			}
		/*
			Une autre maniere de faire le code avec la commande "isset".
			if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) &&  isset($_POST['fonction']) && isset($_POST['email'])){
			}
		*/
	?>
</body>
</html>