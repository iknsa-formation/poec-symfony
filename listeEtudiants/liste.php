<?php
	 require_once "db.php";

	if(!isset($_SESSION)){
        session_start();
    }
	//var_dump($_SESSION['prenom'],$_SESSION['nom']);die;

if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])): ?>
              <ul>
                <li class="btn btn-info">

                    Bonjour <?= $_SESSION['prenom'] ." ".$_SESSION['nom'];?> <a href="logout.php" class="btn btn-danger">Logout</a>
                </li>
              </ul>
                <?php else: ?>
                    <a href="login" class="btn btn-primary">Sign in </a>  or
                    <a href="inscription" class="btn btn-primary">Sign up</a>
                <?php endif;
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Formulaire_table</title>
</head>
<body>
	<table class="table table-striped" style="width: 70%">
		<thead>
			<caption style="font-size: 1.2em">Liste des étudiantes</caption>
			<tr>
	       		<th scope="col">Id</th>
	       		<th scope="col">Nom</th>
	       		<th scope="col">Prenom</th>
	       		<th scope="col">Email</th>
	       		<th scope="col">Foction</th>
	       		<th scope="col">Telephone</th>
	       		<th scope="col">Adresse</th>
	       		<th scope="col">Edit</th>
	       		<th scope="col">Delete</th>
	   		</tr>		
		</thead>
		<tbody>
	<?php
		$sql = "SELECT * FROM etudiant";
		// acces à ma base de données et ma requete
		$resultat = mysqli_query($connection, $sql);
	/*	
		* mysqli_fetch_row()result->fetch_row() Récupere une ligne de resultat sous forme de tableau associatif
	*/
		//j'utilise ma boucle white et une table assotiative
		while ($row = mysqli_fetch_assoc($resultat)) {
	?>
		<tr>
			<td>
				<?php
					//echo $row[0];
					echo $row['id'];
				?>
			</td>
			<td>
				<?php
					//echo $row[1];
					echo $row['nom'];
				?>
			</td>
			<td>
				<?php
					//echo $row[2];
					echo $row['prenom'];
				?>
			</td>
			<td>
				<?php
					//echo $row[3];
					echo $row['email'];
				?>
			</td>
			<td>
				<?php
					//echo $row[5];
					echo $row['fonction'];
				?>
			</td>
			<td>
				<?php
					//echo $row[5];
					echo $row['telephone'];
				?>
			</td>
			<td>
				<?php
					//echo $row[4];
					echo $row['adresse'];
				?>
			</td>
			<td>
				<a href="edit.php?id=<?php echo $row['id']?>" class="edit"><img src="img/edit.png"></a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $row['id']?>" class="delete"><img src="img/delete.png"></a>
			</td>
		</tr>
	<?php
		}
			mysqli_free_result($resultat);
	?>
		</tbody>
	</table>
		
	</body>
</html>