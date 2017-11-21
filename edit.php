<?php
 require_once 'db.php';
 if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['adresse']) && isset($_POST['fonction'])) {
  $id = $_POST["id"] ;
       $sql = "UPDATE user set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] .
       "', adresse='" . $_POST["adresse"] . "', fonction='" . $_POST["fonction"] . "' WHERE id='" . $id . "'";
     $update = mysqli_query($connection,$sql);
    if($update){
           ?>
           Modification ok
     <?php
          } else{
          ?>
          <div class="alert alert-danger" role="alert">
            Ca passe pas.... !!!
          </div>
        <?php
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>!!! le U de CRuD !!!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
      <body>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Adresse</th>
          <th scope="col">Fonction</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <?php
        $id = $_GET["id"];
        $sql = "SELECT * FROM user WHERE ID= '$id'";
// var_dump($sql);die;
        $resultat = mysqli_query ($connection,$sql);
        while ($row = mysqli_fetch_object($resultat)) {
        ?>
      <form name="form" id="form" enctype="multipart/form-data" method="post" action="update.php">
      <td><?php echo $id;?>
      <input type="text" class="form-control" name="id" placeholder="id" value=" <?php echo $id;?>" style="visibility: hidden" >
      </td>
      <td>
      <input type="text" class="form-control" name="firstname" placeholder="Prenom"
      value="<?php echo $row->firstname;?>">
	            </td>
	          	<td>
	            	<input type="text" class="form-control" name="lastname" placeholder="nom"
                value="<?php echo $row->lastname;?>">
  	         	</td>
  	         	<td>
  	            	<input type="text" class="form-control" name="adresse" placeholder="adresse"
                  value="<?php echo $row->adresse;?>">
	           	</td>
	          	<td>
	            	<input type="text" class="form-control" name="fonction" placeholder="fonction"
                value="<?php echo $row->fonction;?>">
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
