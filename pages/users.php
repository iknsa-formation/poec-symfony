<?php 
	require_once "../bd.php"; 
	require_once "../fonction.php"; 
	include_once "../head.html";
	include_once "../header.php";
	verifSession();
?>
<span class="col-sm-6 col-sm-offset-3">
	<h3>Liste des Users</h3>
	<table class="table">
		<thead class="">
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Adresse</th>
				<th>Fonction</th>
			</tr>
		</thead>
		<tbody>
			<?php selectionUsers($connexion); ?>
		</tbody>
	</table>
	<a href="./">Retour</a>
</span>