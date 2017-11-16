<?php
// Si tous les champs sont bien remplis
if (isset($_POST['inputNom']) && isset($_POST['inputPrenom']) && isset($_POST['inputMail']) && isset($_POST['inputTel'])) {

	// On rend inoffensives les balises HTML que le visiteur aurait pu entrer dans nos input
	$_POST['inputNom'] = htmlspecialchars($_POST['inputNom']);
	$_POST['inputPrenom'] = htmlspecialchars($_POST['inputPrenom']);
	$_POST['inputMail'] = htmlspecialchars($_POST['inputMail']);
	$_POST['inputTel'] = htmlspecialchars($_POST['inputTel']);

	// On regarde si le nom et prénom saisis sont bien de type string
	if (is_string($_POST['inputNom']) && is_string($_POST['inputPrenom'])) {

		// On teste la validité de l'adresse email avec une regex
		if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['inputMail'])) {

			// On teste aussi la validité du numéro de téléphone
			if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['inputTel'])) {
				
				// Préparation de la requête
				$req_pre = mysqli_prepare($connection, 'INSERT INTO contacts (nom, prenom, mail, tel) VALUES ( ?, ?, ?, ?)');
				mysqli_stmt_bind_param($req_pre, "sssi", $_POST['inputNom'], $_POST['inputPrenom'], $_POST['inputMail'], $_POST['inputTel']);

				// Execution de la requête
				mysqli_stmt_execute($req_pre);
				
			}			
		}
	}
}
