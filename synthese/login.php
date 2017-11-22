<?php
    require_once 'db.php';

    if(!isset($_SESSION)){
        session_start();
    }
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
        <nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-primary">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <?php if(isset($_SESSION['is_connected']) && $_SESSION['is_connected']): ?>
                    Bonjour <?=  $_SESSION['nom']; ?> <a href="logout" class="btn btn-danger">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-primary">Sign in </a>  or
                    <a href="inscription.php" class="btn btn-primary">Sign up</a>
                <?php endif; ?>
            </form>
          </div>
        </nav>
    </header>

    <main>
        <h1>Login</h1>
        <?php
        if (count($_POST) > 0) {

          $_SESSION['email'] =  $_POST['email'];
          $_SESSION['password'] =  $_POST['password'];

          $hash = password_hash($_SESSION['password'],PASSWORD_BCRYPT);

          $requete = "select password from etudiants where email = '".$_SESSION['email']."'";

          $pwd =mysqli_query($connection,$requete);
          /*Recuperation du mot de passe en BDD*/
          foreach ($pwd as $key => $value) {
              $getPwd = $value['password'];
              
              $login = "select * from etudiants where email = '".$_SESSION['email']."' and password = '".$value['password']."'";

              $isLogged= mysqli_query($connection,$login);
              /*var_dump($isLogged,$login);die;
              if (mysqli_num_rows($isLogged) === 0) */
              foreach ($isLogged as $key => $value) {
                  if ($value['email'] === $_SESSION['email'] && (password_verify($_SESSION['password'], $value['password'])))   {
                    $_SESSION['prenom'] = $value['prenom'];
                    $_SESSION['nom'] = $value['nom'];
                    $_SESSION['role'] = $value['role'];
                    header("Location:list.php");
                  }else {
                  echo "<div class='alert alert-danger' role='alert'>
                            Vous n'avez pas de compte. Voulez vous vous <a href='inscription.php'> inscrire ?</a>
                        </div>";
              }
              }
            }
        }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email*:</label>
                <input type="text" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" id="password" required>
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