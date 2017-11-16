<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contacts</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>

<div class="container">

<div id="formulaire">
<h2>Ajouter un contact</h2>  
  	<form action="" method="POST">
  		<?php 
  		// inclus le formulaire
		include "view/form.html";
 		?>
 		<input id="valider" type="submit" class="btn btn-primary" value="Valider"/>
    </form>
</div>
<?php
// Connexion à la BDD
require "model/DBConnexion.php";
// La sécurisation du formulaire
require "controller/formController.php";
?>
	<a href="view/modifier.php" class="btn btn-primary" role="button">Modifier la liste</a>
	<h2>Mes contacts</h2>
	<table id="myTable" class="table table-striped table-hover">
		<thead class="thead-dark">
			<tr>
			  <th>Nom</th>
			  <th>Prenom</th>
			  <th>Mail</th>
			  <th>Tel</th>
			</tr>
		</thead>
		<tbody>	
<?php
	while($donnees = mysqli_fetch_assoc($resultat)) {
		echo "<tr><td>".$donnees['nom']."</td><td>". $donnees['prenom']."</td><td>".$donnees['mail']."</td><td>0".$donnees['tel']."</td></tr>";
	}
?>
		</tbody>
</table>
</div><!-- /Container -->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="controller/formController.js"></script>
</body>
</html>