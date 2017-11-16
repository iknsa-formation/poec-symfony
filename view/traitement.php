<?php
define('DBSERVER', 'localhost');
define('DBNAME','interface');
define('DBUSER', 'root');
define('DBPWD', '');
// Connexion à la BDD
$connection = mysqli_connect(DBSERVER, DBUSER ,DBPWD, DBNAME);
// Check la connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Si tous les champs sont bien remplis
if (isset($_POST['inputNom']) && isset($_POST['inputPrenom']) && isset($_POST['inputMail']) && isset($_POST['inputTel'])) {

$id = $_POST["modifier"];
$newLastName = htmlspecialchars($_POST["inputNom"]);
$newName = htmlspecialchars($_POST["inputPrenom"]);
// Le trim est nécessaire ici pour éviter d'avoir des espaces, que la regex n'acceptera pas
$newMail = trim(htmlspecialchars($_POST["inputMail"]));
$newTel = htmlspecialchars($_POST["inputTel"]);


	// On regarde si le nom et prénom saisis sont bien de type string
	if (is_string($newLastName) && is_string($newName)) {

		// On teste la validité de l'adresse email avec une regex
		if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $newMail)) {

			// On teste aussi la validité du numéro de téléphone
			if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $newTel)) {
				
				// Préparation de la requête
				$sql = "
					UPDATE 
						contacts 
					SET 
						nom = '$newLastName',
						prenom = '$newName', 
						mail = '$newMail',
						tel = $newTel
					WHERE 
						id = $id
				";

				if ($connection->query($sql) === TRUE) {
				    echo "Record updated successfully";
				} else {
				    echo "Error updating record: " . $connection->error;
				}

				$connection->close();

			}		
		}		
	}		
}

header('Location: modifier.php');
?>