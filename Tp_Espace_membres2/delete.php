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
        <div class="jumbotron">
    <h1>BIENVENUE</h1>
  
          <?php
          //$id = $_GET['id'];
        //  if (isset($_GET['id'])) {
//$id = $_GET['id'];}
        $deleteId = $_GET["id"] ;
        $sql = "DELETE FROM members WHERE id = ".$deleteId ;
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