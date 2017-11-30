<?php
require "articleManager.php";
include "include/header.html";
?>

<!DOCTYPE html>
<html>
<head>
		
	<title></title>
</head>

<body>

<?php
$article = new ArticleManager();
if (isset($_POST['submit'])) {
	$titre = $_POST['titre'];
	$auteur = $_POST['auteur'];
	$image = $_FILES['image'];
	$message = $_POST['message'];

/* Pour envoyer mes fichier à un destination. dirname - renvoie le chemin du dossier  parent */
$from = $_FILES['image']['tmp_name'];

$destination = dirname(__FILE__) . '\\uploads\\' .$_FILES['image']['name'];

/* move_uploaded_file - Deplace un fichier téléchargé */
if (move_uploaded_file($from,$destination)) {

//	echo "Image deplace"; 

	$article->create(["titre" => $titre, "auteur" => $auteur, "image" => "./uploads/" .$_FILES['image']['name'], "message" => $message]);
	}
}
?>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter un article</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=" " method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="titre" class="col-form-label">Titre:</label>
            <input type="text" class="form-control" id="titre" name="titre">
          </div>
          <div class="form-group">
            <label for="auteur" class="col-form-label">Auteur:</label>
            <input type="text" class="form-control" id="auteur" name="auteur">
          </div>
          <div class="form-group">
            <label for="image" class="col-form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>
          <div class="form-group">
            <label for="message" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message" name="message"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Envoyer message</button>
      </div></form>
    </div>
  </div>
</div>
    <section> 
		<table class="table table-striped" style="width: 100%">
			<thead>
			<caption style="font-size: 1.2em">Liste des étudiantes</caption>
				<tr>
			       	<th scope="col">Id</th>
			       	<th scope="col">Image</th>
			       	<th scope="col">Titre</th>
			       	<th scope="col">Auteur</th>
			       	<th scope="col">message</th>
			       	<th scope="col">Edit</th>
			       	<th scope="col">Delete</th>
			   	</tr>		
			</thead>
			<tbody>
				<?php 
				$db = (new DAO)->connect();
				$listArticle = $db->query("SELECT * FROM article");
				while($row = $listArticle->fetch(PDO::FETCH_ASSOC))
				{
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td style="width: 30%"><?php echo '<img class= "img-valing" src="' .$row['image'].'" style ="line-heigt: 65px;"/>'; ?></td>
					<td><?php echo $row['titre']; ?></td>
					<td><?php echo $row['auteur']; ?></td>
					<td><?php echo $row['message']; ?></td>
					<td><a href="edit.php?id=<?php echo $row['id']?>" class="edit"><img src="img/edit.png"></a></td>
					<td><a href="delete.php?id=<?php echo $row['id']?>" class="delete"><img src="img/delete.png"></a>
					</td>
				</tr>
				<?php }
				?>
		</tbody>
		</table>
	</section>
<footer>
<?php include "include/footer.html"; ?>
</footer>
</body>
</html>