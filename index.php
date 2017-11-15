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
<?php
// Connexion à la BDD
require "model/DBConnexion.php";
// inclus le formulaire
include "view/form.html";
// La sécurisation du formulaire
require "controller/formControl.php";
?>
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
echo "<tr><td>".$donnees['nom']."</td><td>". $donnees['prenom']."</td><td>".$donnees['mail']."</td><td>".$donnees['tel']."</td></tr>"; 
}

?>
		</tbody>
</table>
</div><!-- /Container -->




</body>
</html>