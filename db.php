<?php
  // $servername = "localhost";
  // $username = "root";
  // $password = "";
  // $dbname = "poec-symfony";

  define('DBSERVER', 'localhost');
  define('DBNAME', 'poec-symfony');
  define('DUSER', 'root');
  define('DBPASS', '');

  $connection = mysqli_connect(DBSERVER, DUSER, DBPASS, DBNAME
  );
  if (!$connection) {
      die('<strong> impossible de se connecter</strong><br/>'.
      mysqli_connect_error());
  } else {
      echo '<strong> ca marche .......enfin.... presque</strong><br/>';
  }
?>
