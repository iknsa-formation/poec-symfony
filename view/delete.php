<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier un contact</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
</head>
<body>

<div class="container">
<?php 
// Connexion à la BDD
require "../model/DBConnexion.php";
?>
<h2>Supprimer un contact</h2>
<table id="myTable" class="table table-striped table-hover">
	<thead class="thead-dark">
		<tr>
		  <th>Supprimer</th>
		  <th>Nom</th>
		  <th>Prenom</th>
		  <th>Mail</th>
		  <th>Tel</th>
		</tr>
	</thead>
	<tbody>
	  	<form action="../controller/deleteController.php" method="POST">
			<?php
			// On attribue un id à chaque ligne créée dynamiquement
			$i = 1;
				while($donnees = mysqli_fetch_assoc($resultat)) {
					echo '<tr>
						    <td><input type="radio" id="'.$i.'" name="delete" value="'.$donnees["id"].'" class="radio"></td>
							<td class="col1">'.$donnees["nom"].'</td>
							<td class="col2">'. $donnees["prenom"].'</td>
							<td class="col3">'.$donnees["mail"].'</td>
							<td class="col4">0'.$donnees["tel"].'</td>
						  </tr>';
					$i++;
				}
			?>
	</tbody>
</table>
	<input id="valider" type="submit" class="btn btn-danger" value="Supprimer">
		</form>
	<a href="../index.php" class="btn btn-primary" role="button">Retour à l'index</a>
</div>

</div><!-- /container -->
</body>
</html>