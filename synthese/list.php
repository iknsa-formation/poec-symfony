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
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])): ?>
              <ul>
                <li class="btn btn-info">
                    Bonjour <?= $_SESSION['prenom'] ." ".$_SESSION['nom'];?> <a href="../logout.php" class="btn btn-danger">Logout</a>
                </li>
              </ul>
                <?php else: ?>
                    <a href="login" class="btn btn-primary">Sign in </a>  or
                    <a href="inscription" class="btn btn-primary">Sign up</a>
                <?php endif; ?>
            </form>
          </div>
        </nav>
    </header>

    <main>
        <?php
           if (!isset($_SESSION['email']) || (!isset($_SESSION['nom'])))  {
              echo  "<div class='alert alert-danger' role='alert'>
                Vous devez être connecté pour voir cette page </div>";
              echo "<img src='img/oups.gif'>";
          }else {
        ?>
         <h1>Liste des etudiants</h1>
         <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Prénom</th>
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Tél</th>
              <th scope="col">Adresse</th>
              <th scope="col">Edit</th>
            </tr>
              </thead>
              <tbody>
              <?php
                $sql = "SELECT * FROM etudiants";
                $resultat = mysqli_query ($connection,$sql);
                while ($row = mysqli_fetch_assoc($resultat)) {
              ?>
              <tr>
              <th><?php echo $row['id']; ?></th>
              <td> <?php echo $row['prenom']; ?></td>
              <td> <?php echo $row['nom']; ?></td>
              <td> <?php echo $row['email']; ?></td>
              <td><?php  echo $row['tel'];?> </td>
              <td><?php  echo $row['adresse'];?> </td>
              <td><a href="edit.php?id=<?php echo $row['id'] ?>">Modifier</a></td>
              </tr>
              <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </main>
    <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>