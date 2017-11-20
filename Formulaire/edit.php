<?php
require_once "db.php";

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['adresse'])
&& isset($_POST['fonction'])) {

$id=$_GET['id'];
// var_dump($id);die;

$sql = "UPDATE user set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] ."',adresse='" . $_POST["adresse"] . "',
fonction='" . $_POST["fonction"] . "' WHERE id='" .$id ."'";

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

//$sql = "SELECT * from USER where id=$id";
 //var_dump($sql);die;


<DOCTYPE! html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="btn-group btn-group-lg" role="button" aria-label="...">
      <a href="index.html" target="_blank" type="html" class="btn btn-primary">
        Ajouter</a>.</div>
    <div class="container">
    <h1>Liste de étudiants</h1>
      <tbody>
        <table class="table maclasse">
          <thead>
            <tr>
              <th  scope ="col">#</th>
              <th  scope ="col">First Name</th>
              <th  scope ="col">Last Name</th>
              <th  scope ="col">Adresse</th>
              <th  scope ="col">Fonction</th>
							<th  scope ="col">Edit</th>
            <tr>
          </thead>
       <tbody>

        <tr>
            <?php
            	//$id = $_GET['id'];
              if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

                $sql = "SELECT * FROM user WHERE id= $id";
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
 	   <input type="text" class="form-control" name="lastname" placeholder="Prenom" value="<?php echo $row->lastname;?>">
 	 </td>
   <td>
 	   <input type="text" class="form-control" name="adresse" placeholder="Prenom" value="<?php echo $row->adresse;?>">
 	 </td>
   <td>
 	   <input type="text" class="form-control" name="fonction" placeholder="Prenom" value="<?php echo $row->fonction;?>">
 	 </td>
</tr>
<?php
}
  mysqli_free_result($resultat);
  ?>
  <input type="submit" class="btn btn-primary">
</form>
</body>
</html>
