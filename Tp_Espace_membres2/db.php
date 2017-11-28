<?php


//  create connection

define("SERVERNAME","localhost");

define("DBUSER","root");
define("DBPASS","");
define("DBNAME","espace_membres");
$connection = mysqli_connect(SERVERNAME,DBUSER,DBPASS,DBNAME);

  if (!$connection) {
      die("<strong> Impossible de se connecter </strong><br>".mysqli_connect_error());
      }else{
      echo "<strong> Jai réussi </strong><br>";
  }


?>
