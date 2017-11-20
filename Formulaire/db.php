<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poec-symfony";

//  create connection

define("SERVERNAME","localhost");
define("DBNAME","poec-symfony");
define("DBUSER","root");
define("DBPASS","");

$connection = mysqli_connect(SERVERNAME,DBUSER,DBPASS,DBNAME);

  if (!$connection) {
      die("<strong> Impossible de se connecter </strong><br>".mysqli_connect_error());
      }else{
      //echo "<strong> Jai réussi </strong><br>";
  }
?>
