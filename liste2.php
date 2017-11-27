<?php
require_once "db2.php";


session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: index.php');
	exit();
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>recup de données dans base</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<tbody>
<table class="table">
  <thead>
<tr style="border: 1px black solid">
  <th scope="col">Id</th>
  <th scope="col">prenom</th>
  <th scope="col">nom</th>
  <th scope="col">email</th>
  <!-- <th scope="col">mdp</th> -->
  <th scope="col">tel</th>
  <th scope="col">adresse</th>
  </tr>
<?php
$requete = 'select * from crud';
$result = mysqli_query($connection,$requete);
while ($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['prenom'] ?></td>
<td><?php echo $row['nom'] ?></td>
<td><?php echo $row['email'] ?></td>
<!-- <td><?php echo $row['mdp'] ?></td> -->
<td><?php echo $row['tel'] ?></td>
<td><?php echo $row['adresse'] ?></td>
<td><a href="edit2.php?id=<?php echo $row['id']?>"> <img src='img/edit.png'></a></td>
<td><a href="delete2.php?id=<?php echo $row['id']?>">
  <img src='img/delete.png' OnClick= return confirm('Voulez-vous vraiment supprimer ?');></a></td>
  <?php
}
?>
<form>

</form>
</tr>
</thead>
</tbody>
</table>
<body>
  <input type="button" value="fermer la base" onclick="self.close()">
</body>
