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

		$isExist = "SELECT mail, pass from utilisateurs WHERE mail='".$mail."' AND pass='".$pass_hache."'";
		$exist = mysqli_query($connexion, $isExist);
		$row = mysqli_num_rows($exist);


		if($row > 0) {
			echo "bienvenue";
		} else {
			echo "Qui êtes vous?";
		}
}