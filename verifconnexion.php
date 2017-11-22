<?php 
	require_once "bd.php";
	require_once "fonction.php";

	if(verifConnexion($connexion)){
		// connextion OK
		header('Location:pages/');
	}else{
		header('Location:./?erreur=4&mail='.$_POST["mail"].'&mdp='.$_POST["mdp"]);
		// Saisie incorecte
	}

?>