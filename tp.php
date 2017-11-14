<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TP PHP</title>
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

<?php

$contact = array (
	1 => array("prenom" => "Moussa", "nom" => "Camara", "telephone" => "01205564064"),
	2 => array("prenom" => "Khalid", "nom" => "Sookia", "telephone" => "01205564064"),
	3 => array("prenom" => "Moustakime", "nom" => "Kifya", "telephone" => "01205564064"),
);
?>

<div class="col-md-6">
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th>prenom</th>
				<th>nom</th>
				<th>tel</th>
			</tr>
		</thead>

		<tbody>

		<?php
		foreach ($contact as $key) {
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

</body>
</html>