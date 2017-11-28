
<?php
require_once "db.php";
 if(!isset($_SESSION)){
        session_start();
    }

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['tel']) && isset($_POST['adresse'])
&& isset($_POST['statut'])) {
$id=$_GET['id'];
// var_dump($id);die;
$sql = "UPDATE members set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] ."',adresse='" . $_POST["adresse"] . "',email='" . $_POST["email"] . "',password='" . $_POST["hash"] . "',tel='" . $_POST["tel"] . "',adresse='" . $_POST["adresse"] . "' WHERE id='" .$id ."'";
$update = mysqli_query($connection,$sql);
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

<DOCTYPE! html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
        <div class="jumbotron">
    <h1>MODIFICATION</h1>
  </div>
    <div class="btn-group btn-group-lg" role="button" aria-label="...">
      <a href="update.php" target="_blank" type="html" class="btn btn-primary">
        Modifier</a>.</div>
    <div class="container">
    <h1>Liste de étudiants</h1>
      <tbody>
        <table class="table maclasse">
          <thead>
            <tr>
              <th  scope ="col">#</th>
              <th  scope ="col">First Name</th>
              <th  scope ="col">Last Name</th>
              <th  scope ="col">Email</th>
              <th  scope ="col">Password</th>
              <th  scope ="col">Tel</th>
              <th  scope ="col">Adresse</th> 
              
            <tr>
          </thead>
       <tbody>

        <tr>
            <?php
            	//$id = $_GET['id'];
              if (isset($_GET['id'])) {
    $id = $_GET['id'];
}if (isset($id)) {$id=$_GET['id'];}
            
                $sql = "SELECT * FROM members WHERE id='".$id."'";
                 //var_dump($sql);die;
                $resultat = mysqli_query ($connection,$sql);
               while ($row = mysqli_fetch_object($resultat)) {
            ?>
<form name ="form"  id="form" enctype="multipart/form-data" method="post"
action="update.php">
  <td>
    <input type="text" class="form-control" name="id" value="<?php echo $id;?>">
  </td>
  <td>
	   <input type="text" class="form-control" name="firstname" placeholder="Prenom" value="<?php echo $row->firstname;?>">
   </td>
   <td>
 	   <input type="text" class="form-control" name="lastname" placeholder="Nom" value="<?php echo $row->lastname;?>">
   </td>
   <td>
 	   <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row->email;?>">
   </td>
   <td>
 	   <input type="password" class="form-control" name="password" placeholder="mot de passe" value="<?php echo $row->password;?>">
   </td>
   <td>
 	   <input type="text" class="form-control" name="tel" placeholder="tel" value="<?php echo $row->tel;?>">
   </td>
   <td>
 	   <input type="text" class="form-control" name="adresse" placeholder="adresse" value="<?php echo $row->adresse;?>">
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
     
</body>
</html>