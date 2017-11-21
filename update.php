<?php
	require_once 'db.php';
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
        $sql = "UPDATE user set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] . "',
        adresse='" . $_POST["adresse"] . "', fonction='" . $_POST["fonction"] . "' WHERE ID='" . $_POST["id"] . "'";
        $update = mysqli_query($connection,$sql);
          if($update){
            ?>
            <div class="alert alert-success" role="alert">
              Modification ok
          </div>
          <?php
            header("Location:liste.php");
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
