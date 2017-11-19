<?php

	define('DBSERVER', 'localhost');
	define('DBNAME', 'synthese');
	define('DBUSER', 'root');
	define('DBPASS', '');

	$connection =  mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME);

	if (!$connection) {
		die("impossible de se connecter à la BDD");
	}
?>