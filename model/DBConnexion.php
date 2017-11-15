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
// Stockage de la requête dans la variable $resultat
$resultat = mysqli_query($connection, 'SELECT * FROM contacts LIMIT 0, 10');

