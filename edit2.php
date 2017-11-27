<?php
 require_once 'db2.php';
 if(isset($_POST['email'])) {
  $id = $_POST["id"] ;
  var_dump('aazazaz');die;
       $sql = "UPDATE crud set prenom='" . $_POST["prenom"] . "',nom='" . $_POST["nom"] .
       "', email='" . $_POST["email"] . "', mdp='" . $_POST["mdp"] . "',
        tel='" . $_POST["tel"] . "', adresse='" . $_POST["adresse"] . "' WHERE id='" . $id . "'";

     $update = mysqli_query($connection,$sql);
    if($update){
           ?>
           Modification ok
     <?php
          }else{
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
          <th scope="col">id</th>
          <th scope="col">prenom</th>
          <th scope="col">nom</th>
          <th scope="col">email</th>
          <th scope="col">mdp</th>
          <th scope="col">tel</th>
          <th scope="col">adresse</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <?php
        $id = $_GET["id"];
        $sql = "SELECT * FROM crud WHERE ID= '$id'";
// var_dump($sql);die;
        $resultat = mysqli_query ($connection,$sql);
        while ($row = mysqli_fetch_object($resultat)) {
        ?>
      <form name="form" id="form" enctype="multipart/form-data" method="post" action="update2.php">
      <td><?php echo $id;?>
      <input type="text" class="form-control" name="id" placeholder="id" value=" <?php echo $id;?>" style="visibility: hidden" >
      </td>
      <td>
      <input type="text" class="form-control" name="prenom" placeholder="prenom"
      value="<?php echo $row->prenom;?>">
	            </td>
	          	<td>
	            	<input type="text" class="form-control" name="nom" placeholder="nom"
                value="<?php echo $row->nom;?>">
  	         	</td>
  	         	<td>
  	            	<input type="text" class="form-control" name="email" placeholder="email"
                  value="<?php echo $row->email;?>">
	           	</td>
	          	<td>
	            	<input type="text" class="form-control" name="mdp" placeholder="mdp"
                value="<?php echo $row->mdp;?>">
	            </td>
              <td>
                  <input type="text" class="form-control" name="tel" placeholder="tel"
                  value="<?php echo $row->tel;?>">
              </td>
              <td>
                <input type="text" class="form-control" name="adresse" placeholder="adresse"
                value="<?php echo $row->adresse;?>">
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
