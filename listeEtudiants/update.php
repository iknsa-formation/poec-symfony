<?php
require_once 'db.php';

$id = $_POST["id"];
	
	$sql = "UPDATE etudiant set nom = '". $_POST["nom"] ."', prenom ='" .$_POST["prenom"] ."', email = '" .$_POST["email"]. "', fonction = '" . $_POST["fonction"] . "', telephone = '" . $_POST["telephone"] . "', adresse = '" .$_POST["adresse"]. "' WHERE id = '" . $id ."'";

	$update = mysqli_query($connection,$sql);
	if($update){
		header("location:liste.php");
?>
	<div class="alert alert-success role = "alert">Modification ok
	</div>
<?php
	}else{
?>
<div class="alert alert-danger" role="alert">
	Modification Ok
</div >
<?php
		}
?>