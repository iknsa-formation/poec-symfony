<?php
require_once "db.php";
?>

//if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['adresse'])
//&& isset($_POST['fonction'])) {

//$id=$_GET['id'];
// var_dump($id);die;


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
          //$id = $_GET['id'];
        //  if (isset($_GET['id'])) {
//$id = $_GET['id'];}

        $deleteId = $_GET["id"] ;
        $sql = "DELETE FROM user WHERE id = ".$deleteId ;

        $suppress = mysqli_query($connection, $sql ) ;

        if($suppress) {
          echo("La suppression à été correctement effectuée") ;
        } else{
          echo("La suppression à échouée") ;
        }
    ?>

</div>
</body>
</html>
