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
$userPass2 = $_POST['userPass2'];
$userMail = $_POST['userMail'];
	
	// On rajoutera des contrôles plus tard
	if($userPass === $userPass2) {
		$pass_hache = $_POST['userPass2'];
	
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

		/* 
		* Ici viendra le if exist
		*/

		$sql = "INSERT INTO utilisateurs(nom, prenom, pass, mail) VALUES ('".$userLastName."','".$userFirstName."','".$pass_hache."','".$userMail."')";
		$insert = mysqli_query($connexion,$sql);
	}
}
header('Location: SignUpValidation.php');

?>

</body>
</html>