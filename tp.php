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

// Connexion à la BDD
$connection = mysqli_connect(DBSERVER, DBUSER ,DBPWD, DBNAME);

// Check la connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Stockage de la requête dans la variable $resultat
$resultat = mysqli_query($connection, 'SELECT * FROM contact LIMIT 0, 10');

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

			while($donnees = mysqli_fetch_assoc($resultat))
			{
				echo "<tr><td>" . $donnees['nom'] . "</td><td>" . $donnees['prenom'] . "</td><td>" .$donnees['tel']. "</td></tr>"; 
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