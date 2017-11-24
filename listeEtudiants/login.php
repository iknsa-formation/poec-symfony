
<?php
	require_once 'db.php';

	if(!isset($_SESSION)){
		session_start();
	}
	 if (count($_POST) > 0) {
      $_SESSION['email'] =  $_POST['email'];
      $_SESSION['password'] =  $_POST['password'];
      $requete = "select password from etudiant where email = '".$_SESSION['email']."'";
      $pwd =mysqli_query($connection,$requete);
      /*Recuperation du mot de passe en BDD*/
      foreach ($pwd as $key => $value) {
          
          $login = "select * from etudiant where email = '".$_SESSION['email']."' and password = '".$value['password']."'";
          $isLogged= mysqli_query($connection,$login);
          foreach ($isLogged as $key => $value) {
              if ($value['email'] === $_SESSION['email'] && (password_verify($_SESSION['password'], $value['password'])))   {
                $_SESSION['prenom'] = $value['prenom'];
                $_SESSION['nom'] = $value['nom'];
                header("Location:liste.php");
              }else {
              echo "<div class='alert alert-danger' role='alert'>
                        Vous n'avez pas de compte. Voulez vous vous <a href='inscription.php'> inscrire ?</a>
                    </div>";
          }
          }
        }
    }
?>