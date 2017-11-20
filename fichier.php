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
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <?php
                $sql = "SELECT * FROM USERS";
                $resultat = mysqli_query ($connection,$sql);
                while ($row = mysqli_fetch_assoc($resultat)) {
            ?>
          <th>
            <?php 
                echo $row['id']; 
          ?>
          </th>
          <td>
            <?php 
                echo $row['firstname']; 
            ?>
            </td>
          <td>
            <?php 
                echo $row['lastname']; 
            ?>
            </td>
          <td>
            <?php 
                echo $row['adresse']; 
            ?>
            </td>
          <td>
            <?php 
                echo $row['fonction']; 
            ?>
            </td>
            <td>
            <a href="edit.php?id=<?php echo $row['id'] ?>"><img src="img/edit.png"></a>
        </td>
        <td>
            <a href="delete.php?id=<?php echo $row['id'] ?>"><img src="img/delete.png"></a>
            </td>
        </tr>
        <?php 
            }
                mysqli_free_result($resultat);
            ?>
      </tbody>
    </table>

 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>