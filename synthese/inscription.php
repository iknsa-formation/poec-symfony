<?php
	require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TP PHP - IKNSA</title>
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
    

    <main>
        <h1>Création d'un compte</h1>
        <?php
        	if (count($_POST) > 0) {
				$prenom = $_POST['firstname'];
				$nom = $_POST['lastname'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$tel = $_POST['tel'];
				$adresse = $_POST['adress'];

				$hash = password_hash($_POST['password'],PASSWORD_BCRYPT);

				$requete = "select email from etudiants where email ='".$email."'";

				$isExist = mysqli_num_rows(mysqli_query($connection,$requete));

				if ($isExist > 0) {
					echo "<div class='alert alert-danger' role='alert'>
						  Utilisateur existe deja
						</div>";
				} else {
					$sql = "INSERT INTO etudiants(prenom,nom,email,password,tel,adresse) value ('".$prenom."','".$nom."','".$email."','".$hash."','".$tel."','".$adresse."')";
					$insert =  mysqli_query($connection,$sql);

					if ($insert) {
						echo "<div class='alert alert-success' role='alert'>
						  This is a success alert—check it out!
						</div>";
<<<<<<< HEAD
						header("Location:list.php/");
=======
>>>>>>> delete-user
					}
				}
			}
        ?>
        <form action="" method="post">

            <div class="form-group">
                <label for="firstname">Prenom*:</label>
                <input type="text" name="firstname" id="firstname" required>
            </div>

            <div class="form-group">
                <label for="lasrname">Nom*:</label>
                <input type="text" name="lastname" id="lasrname" required>
            </div>

			 <div class="form-group">
                <label for="email">Email*:</label>
                <input type="text" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe*:</label>
                <input type="password" name="password" id="password" required>
            </div>

			 <div class="form-group">
                <label for="tel">Tel*:</label>
                <input type="int" name="tel" id="tel" required>
            </div>

			 <div class="form-group">
                <label for="adress">Adress*:</label>
                <input type="text" name="adress" id="adress" required>
            </div>
            
            <div class="form-group">
                <input type="submit" value="se connecter">
            </div>        
        </form>
    </main>

    <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>