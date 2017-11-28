<?php
	 require_once "db.php"
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Edit_liste</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-primary">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
		</nav>
	</header>
	<table class="table table-striped" style="width: 80%">
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
	       		</tr>
	    </thead>
		<tbody>
			<tr>
				<?php
				$id = $_GET['id'];
				//var_dump($id);
				//$id = !empty($_GET['id']) ? mysql_real_escape_string($_GET['Id']) : '1'; 
				
				$sqledit = "SELECT * FROM etudiant where id = $id";

				// acces à ma base de données et ma requete
				$resultat = mysqli_query($connection, $sqledit);
				while ($row = mysqli_fetch_object($resultat))
				{
				?>
					<form name="form" id="form" enctype="multipart/form-data" method="POST" action="update.php">	
						<td>
							<input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $id;?>">
						</td>
						<td>
							<input type="text" class="form-control" name="nom" placeholder="nom" value="<?php echo $row->nom;?>">
						</td>
						<td>
							<input type="text" class="form-control" name="prenom" placeholder="prenom" value="<?php echo $row->prenom;?>">
						</td>
						<td>
							<input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row->email;?>">
						</td>
						<td>
							<input type="text" class="form-control" name="fonction" placeholder="fonction" value="<?php echo $row->fonction;?>">
						</td>
						<td>
							<input type="text" class="form-control" name="telephone" placeholder="telephone" value="<?php echo $row->telephone;?>">
						</td>
						<td>
							<input type="text" class="form-control" name="adresse" placeholder="adresse" value="<?php echo $row->adresse;?>">
						</td>
				<?php
				}
				?>
					<div><input type="submit" class="btn btn-primary"></div>
					</form>
		</tbody>
	</table>
</body>
</html>
