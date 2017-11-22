<?php
require_once "data.php";
if(count($_POST)>0) {
	$sql = "UPDATE users set firstname='" . $_POST["firstname"] . "',pseudo='" . $_POST["pseudo"] . "', email='" . $_POST["email"] ."' , password='".$_POST["password"]."' WHERE id='".$_POST["id"]."'";
	$update = mysqli_query($connection,$sql);
	if($update){
?>
<div class="alert alert-success" role="alert">
	Modification ok
</div>
<?php 
		echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Moddification reussi redirection dans 5 seconde ! <meta http-equiv="refresh" content="5; URL=http://localhost/poec-symphony/connecter(list).php">
</div>';
	} else{
?>
<div class="alert alert-danger" role="alert">
	Modification KO
</div>
<?php
	}
} 
?>
