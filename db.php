<?php
/* $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "demo";*/
// Create Connection
define('DBSERVER','localhost');
define('DBNAME','demo');
define('DBUSER','root');
define('DBPASS','');
$connection = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);
   if (!$connection) 
   {
   	die('<strong> Impossible de se connecter, veuillez revoir les access </strong><br>');
   }
   else
   {
   	echo '<strong> Connection réussi';
   }
?>