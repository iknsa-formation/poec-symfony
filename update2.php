<?php
	require_once 'db2.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>met a jour la base</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
      if(count($_POST)>0) {
				$sql = "UPDATE crud set prenom='" . $_POST["prenom"] . "',nom='" . $_POST["nom"] .
				"', email='" . $_POST["email"] . "', mdp='" . $_POST["mdp"] . "', tel='" . $_POST["tel"] .
				"', adresse='" . $_POST["adresse"] . "' WHERE id='" . $_POST["id"]. "'";
        $update = mysqli_query($connection,$sql);
          if($update){
            ?>
            <div class="alert alert-success" role="alert">
              Modification ok
          </div>
          <?php
            header("Location:liste2.php");
          } else{
          ?>
          <div class="alert alert-danger" role="alert">
            Ca passe pas.... !!!
        </div>
        <?php
          }
      }
    ?>
  </body>
</html>
