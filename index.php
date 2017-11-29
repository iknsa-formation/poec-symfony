<?php
require_once "dbconnect.php";
require_once "articleManager.php";
require_once "inserte.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


	</head>
	<body>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Nouveau article</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="#">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">auteur:</label>
								<input type="text" class="form-control" id="recipient-name" name="auteu">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">nom:</label>
								<input type="text" class="form-control" id="recipient-name" name="nom">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">titre:</label>
								<input type="text" class="form-control" id="recipient-name" name="titre">
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Message:</label>
								<textarea class="form-control" id="message-text"></textarea>
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">image</label>
								<input type="file" class="form-control" id="recipient-name" name="image">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>
		<table>
			<tr>
				<td><?php echo '<img class="img-valing" src="'.$row['image'].'"/>;'?></td>
				<td><?php echo $row['titre'];?></td>
				<td><?php echo $row['auteur'];?></td>
				<td><?php echo $row['nom'];?></td>
			</tr>
		</table>
		<?php
		$article = new ArticleManager();

		if(isset($_POST['submit'])){
			$auteur = $_POST['auteur'];
			$titre = $_POST['titre'];
			$nom = $POST['nom'];
			$image = $_FILES['image'];


			$from = $_FILES['image']['tmp_name'];
			$destination = dirname(__FILE__).'\\Uploads\\'.$_FILES['image'];
			if(move_uploaded_file($from,$destination)){
				echo "Image deplacée!";
				$article->create(["titre"=>$titre,"auteur"=>$auteur,"nom"=>$nom,]);
			}}
		?>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>
