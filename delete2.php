<?php

	require_once 'db2.php';

?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>delete</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <?php

        $deleteId = $_GET["id"] ;



        $sql = "DELETE FROM crud WHERE id = ".$deleteId ;



        $requete = mysqli_query($connection, $sql ) ;



        if($requete) {

          echo("supprimé") ;

        } else{

          echo("Echec suppression") ;

        }

    ?>
		<br />
		<button type="button" class="btn btn-primary"><a href="liste2.php" >Retour liste</a>

  </body>

</html>
