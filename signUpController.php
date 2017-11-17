<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>controller</title>
</head>
<body>

<?php

if (isset($_POST['userLastName']) && isset($_POST['userName']) && isset($_POST['userPass']) && isset($_POST['userPass2']) && isset($_POST['userMail'])) {

$userLastName = htmlspecialchars($_POST['userLastName']);
$userFirstName = htmlspecialchars($_POST['userName']);
$userPass = htmlspecialchars($_POST['userPass']);
$userPass2 = htmlspecialchars($_POST['userPass2']);
$userMail = htmlspecialchars($_POST['userMail']);
	
	// On rajoutera des contrôles plus tard
	if($userPass === $userPass2) {
		$pass_hache = password_hash($userPass2, PASSWORD_DEFAULT);		
	
		define('DBSERVER', 'localhost');
		define('DBNAME','interface');
		define('DBUSER', 'root');
		define('DBPWD', '');
		// Connexion à la BDD
		$connexion = mysqli_connect(DBSERVER, DBUSER ,DBPWD, DBNAME);
		// Check la connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$req_pre = mysqli_prepare($connexion, 'INSERT INTO utilisateurs (nom, prenom, pass, mail) VALUES ( ?, ?, ?, ?)');
		mysqli_stmt_bind_param($req_pre, "ssss", $userLastName, $userFirstName, $pass_hache, $userMail);

		// Execution de la requête
		mysqli_stmt_execute($req_pre);

	/*	// Stockage de la requête dans la variable $resultat
		$isExist = mysqli_query($connexion, 'SELECT mail FROM utilisateurs where mail=$userMail');
		$exist = mysqli_query($connexion, $isExist);

		// Détermine le nombre de lignes du jeu de résultats
		$row = mysqli_num_rows($exist);
		echo $row;
*/
	}
}

?>

</body>
</html>