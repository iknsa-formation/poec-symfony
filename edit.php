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

     <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Adresse</th>
          <th scope="col">Fonction</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <?php

            	$id = $_GET['id'];

                $sql = "SELECT * FROM USERS WHERE id= $id";

                $resultat = mysqli_query ($connection,$sql);

               while ($row = mysqli_fetch_object($resultat)) {
            ?>
      			<form name="form" id="form" enctype="multipart/form-data" method="post" action="update.php">
	          	<td>
	          		<input type="hidden" name="id" value="<?php echo $id;?>">
	          		<input type="text" class="form-control" name="firstname" placeholder="Username" value="<?php echo $row->firstname;?>">
	            </td>
	          	<td>
	            	<input type="text" class="form-control" name="lastname" placeholder="Username" value="<?php echo $row->lastname;?>">
  	         	</td>
  	         	<td>
  	            	<input type="text" class="form-control" name="adresse" placeholder="Username" value="<?php echo $row->adresse;?>">
	           	</td>
	          	<td>
	            	<input type="text" class="form-control" name="fonction" placeholder="Username" value="<?php echo $row->fonction;?>">
	            </td>	
      	</tr>
      	        <?php 
      	            }
      	              mysqli_free_result($resultat);
      	        ?>
              	<input type="submit" class="btn btn-primary">
      			</form>
      </tbody>
    </table>
 	<footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>
