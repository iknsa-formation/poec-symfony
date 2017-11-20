<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poec-symfony";

// Create connection

define('DBSERVER', 'localhost');
define('DBNAME', 'poec-symfony');
define('DBUSER', 'root');
define('DBPASS', '');

//$connection = new mysqli($servername, $username, $password, $dbname);
$connection = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
