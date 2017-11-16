<?php 
	define('DBSERVER','localhost');
	define('DBUSER','root');
	define('DBPASS','');
	define('DBNAME','poec-symfony');

	$connexion = new mysqli(DBSERVER,DBUSER,DBPASS,DBNAME);

	if(!$connexion){
		die('<p><strong> Impossible de se connecter, Veuillez revoir les accès</strong><p>'.mysqli_connect_error());
	}else{
		echo '<p><strong>Connexion réussie !</strong>';
	}
?>