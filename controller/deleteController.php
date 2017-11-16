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

if (isset($_POST['delete'])) {
	$target = $_POST['delete'];
	$sql = ' DELETE FROM contacts WHERE contacts.id = $target ';
   
   if (mysqli_query($connection, $sql)) {
      echo "Record deleted successfully";
   } else {
      echo "Error deleting record: " . mysqli_error($connection);
   }
   mysqli_close($connection);
}
?>
