<?php
	require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course - IKNSA</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
    <!-- Page Content -->
    <header>
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <nav>
            <ul>
                <li><a href="index.html">Home Page</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <div class="breadcrumb">
            <span>You are here</span>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="page.html">About Us</a></li>
            </ul>
        </div>
    </header>
    <?php
        $id = $_POST["id"] ;
      if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['adresse']) && isset($_POST['fonction'])) {

        $sql = "UPDATE users set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] . "', adresse='" . $_POST["adresse"] . "', fonction='" . $_POST["fonction"] . "' WHERE id='" . $id . "'";

        $update = mysqli_query($conn,$sql);
          if($update){
            ?>
            <div class="alert alert-success" role="alert">
              Modification ok
          </div>
          <?php 
          } else{
          ?>
          <div class="alert alert-danger" role="alert">
            Modification KO
        </div>
        <?php
          }
      } 
    ?>
 	<footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>
