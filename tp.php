<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TP PHP</title>
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>

<?php

define('DBSERVER', 'localhost');
define('DBNAME','Contact');
define('DBUSER', 'root');
define('DBPWD', '');

$connection = mysqli_connect(DBSERVER, DBUSER ,DBPWD, DBNAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$_SESSION['contact'] = array (
	1 => array("prenom" => "Moussa", "nom" => "Camara", "telephone" => "0120556406"),
	2 => array("prenom" => "Khalid", "nom" => "Sookia", "telephone" => "0154454421"),
	3 => array("prenom" => "Moustakime", "nom" => "Kifya", "telephone" => "0698536587"),
);


?>

<div class="col-md-6">
	<table id="myTable" class="table table-striped table-hover">
		<thead class="thead-dark">
			<tr>
			    <th>prenom</th>
				<th>nom</th>
				<th>tel</th>
			</tr>
		</thead>

		<tbody>
		<?php
			foreach ($_SESSION['contact'] as $key) {
				echo "<tr> ";
				foreach ($key as $value) {
			       echo "<td>" . $value . "</td>";  
			  	}
			  	echo "</tr>";
			}
		?>
		</tbody>
	</table>
</div>


<?php
require 'form.php';
?>

<!-- Contrôle du formulaire -->
<script type="text/javascript" src="js/formControl.js"></script>
</body>
</html>