<?php
require_once 'dbase.php';
if (!isset($_SESSION)) 
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<title>new</title>
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">  
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="#">LISTE<span class="text-color">ETUDIANTS</span> </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="navbar-form navbar-right">
              <?php
              if(isset($_SESSION['nom']) && isset($_SESSION['prenom']))
              {
               echo "Bonjour ! ".$_SESSION['prenom']." ".$_SESSION['nom'];
              ?>
              <a href="logout.php"><button type="button" class="btn btn-warning btn">LOGOUT</button></a>
              <?php
              }
              else
              {
              echo "Bienvenu ! Visiteur";
              ?>
              <a href="login.php"><button type="button" class="btn btn-warning btn">SIGN IN</button></a>
              <a href="inscrire.php"><button type="button" class="btn btn-warning btn">SIGN UP</button></a>
              <?php
              }
              ?>
            </div>
            </div><!--/.nav-collapse -->
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"> 
        <?php
        $id=mysqli_insert_id($connection);
        $email = $_SESSION['email'];
        $sql1 = "SELECT id, prenom, nom, email, tel, adresse FROM inscrire where email ='".$email."'";
        $select = mysqli_query($connection, $sql1);
        if ($select) 
        {
          echo "Liste des personnes sont ajouté".'<br>';
        }
        $sql = "SELECT * FROM inscrire";
        $result = mysqli_query($connection,$sql);
        if ($result) 
        {
        ?>
      <div class="rows">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead style="text-align: center;"> 
                <tr class="warning">
                <th style="text-align:center">INDEX</th>  
                <th style="text-align:center">PRENOM</th>
                <th style="text-align:center">NOM</th>
                <th style="text-align:center">EMAIL</th>
                <th style="text-align:center">TELEPHONE</th>
                <th style="text-align:center">ADRESSE</th>
                <th style="text-align:center">EDIT</th>
                <th style="text-align:center">REMOVE</th> 
                </tr>
              </thead>
              <tbody>
              <?php
              }
              while ($row = mysqli_fetch_assoc($result))
              {    
              ?>
                  <tr style="text-align: center;">
                  <td>
                  <?php echo $row['id'];?>
                  </td>
                  <td> 
                  <?php echo $row['prenom'];?>
                  </td>
                  <td>
                  <?php echo $row['nom'];?>
                  </td>
                  <td>
                  <?php echo $row['email'];?>
                  </td>
                  <td>
                  <?php echo $row['tel'];?>
                  </td>
                  <td>
                  <?php echo $row['adresse'];?>
                  </td>
                   <td>
                  <a href="modification.php?id=<?php echo $row['id'] ?>">Update</a>
                  </td>
                  <td>
                  <a onClick="javascript: return confirm('Please confirm deletion');" 
                  href="delete.php? id=<?php echo $row['id'] ?>">Delete</a>
                  </td>  
                  </tr>
              <?php
              }
              ?>     
              </tbody>
            </table>
         </div>
      </div>
    </div>
    <div class="rows">
      <div class="col-md-12">
        <footer>
          <p>CopyRights@2017</p>
        </footer>
      </div>
    </div>
  </div>
</body>
</html>