<?php 
	require_once "bd.php";
	require_once "fonction.php";

	if(verifConnexion($connexion)){
		// connextion OK
		header('Location:pages/');
	}else{
		header('Location:./');
		// Saisie incorecte
	}

?>