<?php require_once "fonction.php"; ?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<span>
			<h3>Liste des etudiants</h3>
			<table class="table">
				<thead class="">
					<tr>
						<th>id</th>
						<th>prenom</th>
						<th>nom</th>
						<th>moyen</th>
					</tr>
				</thead>
				<tbody>
					<?php listEtu(listeEtudiantExam()); ?>
				</tbody>
			</table>

			<h3>Liste des admis</h3>
			<table class="table">
				<thead class="">
					<tr>
						<th>id</th>
						<th>prenom</th>
						<th>nom</th>
						<th>moyen</th>
					</tr>
				</thead>
				<tbody>
					<?php trieEtuAdmis(listeEtudiantExam()); ?>
				</tbody>
			</table>

			<h3>Liste des non admis</h3>
			<table class="table">
				<thead class="">
					<th>id</th>
					<th>prenom</th>
					<th>nom</th>
					<th>moyen</th>
				</thead>
				<tbody>
					<?php trieEtuNonAdmis(listeEtudiantExam()); ?>
				</tbody>
			</table>
		</span>
	</body>
<html>