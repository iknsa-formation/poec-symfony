<?php
	require_once "db.php";
?>
<DOCTYPE! html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="btn-group btn-group-lg" role="button" aria-label="...">
      <a href="index.html" target="_blank" type="html" class="btn btn-primary">
        Ajouter</a>.</div>
    <div class="container">
    <h1>Liste de étudiants</h1>
    <?php
   if(count($_POST)>0) {
     $sql = "UPDATE user set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] . "', adresse='" . $_POST["adresse"] . "', fonction='" . $_POST["fonction"] . "' WHERE id='" . $_POST["id"] . "'";
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
         Modification KO
     </div>
     <?php
       }
   }
 ?>
</body>
</html>
