<?php
// On appelle le fichier de connexion
require_once '../model/DBConnexion.php';

// Si tous les champs sont bien remplis
if (isset($_POST['modifier']) && isset($_POST['inputNom']) && isset($_POST['inputPrenom']) && isset($_POST['inputMail']) && isset($_POST['inputTel'])) {

$id = htmlspecialchars($_POST["modifier"]);
$newLastName = htmlspecialchars($_POST["inputNom"]);
$newName = htmlspecialchars($_POST["inputPrenom"]);
$newMail = htmlspecialchars($_POST["inputMail"]);
$newTel = htmlspecialchars($_POST["inputTel"]);

	// On regarde si le nom et prénom saisis sont bien de type string
	if (is_string($_POST['inputNom']) && is_string($_POST['inputPrenom'])) {

		// On teste la validité de l'adresse email avec une regex
		if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['inputMail'])) {

			// On teste aussi la validité du numéro de téléphone
			if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['inputTel'])) {
				
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