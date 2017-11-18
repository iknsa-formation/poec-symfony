<?php

if (isset($_POST['mail']) && isset($_POST['pass'])) {

		$mail = $_POST['mail'];
		$pass = $_POST['pass'];
        $pass_hache = $_POST['pass'];

		define('DBSERVER', 'localhost');
		define('DBNAME','interface');
		define('DBUSER', 'root');
		define('DBPWD', '');
		// Connexion à la BDD
		$connexion = mysqli_connect(DBSERVER, DBUSER ,DBPWD, DBNAME);
		// Check la connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$isExist = "SELECT mail, pass FROM utilisateurs WHERE mail='".$mail."' AND pass='".$pass_hache."'";
		$exist = mysqli_query($connexion, $isExist);
		$row = mysqli_num_rows($exist);

		// Si la requête retourne une ligne, c'est que l'utilisateur existe dans la DB
		if($row > 0) {
			$resultat = mysqli_query($connexion, "SELECT id FROM utilisateurs WHERE mail='".$mail."'");			
			$donnees = mysqli_fetch_assoc($resultat);
			mysqli_free_result($resultat);

			session_start();
			$_SESSION['id'] = $donnees['id'];
			// On le fait entrer
			header('Location: index.php');
		}	
		// Sinon, il est redirectionné vers la page d'inscription
 		else {
			header('Location: inscription.php');
		}
}