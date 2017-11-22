<?php
	require_once "db.php";
?>
<DOCTYPE! html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
		<div class="container">
	<div class="jumbotron">
    /* <div class="btn-group btn-group-lg" role="button" aria-label="...">
      <a href="index.html" target="_blank" type="html" class="btn btn-primary">
        Ajouter</a>.</div> */
    <div class="container">
    <h1>Liste de étudiants</h1>
      <tbody>
        <table class="table maclasse">
          <thead>
            <tr>
              <th  scope ="col">#</th>
              <th  scope ="col">Prénom</th>
              <th  scope ="col">Nom</th>
              <th  scope ="col">Email</th>
              <th  scope ="col">Tel</th>
							<th  scope ="col">Adresse</th>
							<th  scope ="col">ACTION</th>
            <tr>
          </thead>
       <tbody>
<?php
    $sql = "SELECT * FROM MEMBER";
    $resultat = mysqli_query ($connection,$sql);
    /* mysqli_fetch_row()result ->fetch_row() récupère une ligne de résultat sous forme de tableau indexé
    while ($row = mysqli_fetch_row($resultat)) {
    mysqli_fetch_assoc()mysqli->fetch_assoc() récupère les résultats ss forme de tableau associatif
  }

    */
    while ($row = mysqli_fetch_assoc($resultat)) {
      ?>
      <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["firstname"]; ?></td>
      <td><?php echo $row["lastname"]; ?></td>
      <td><?php echo $row["adresse"]; ?></td>
      <td><?php echo $row["fonction"]; ?></td>

			<td><a href="edit.php?id=<?php echo $row['id'] ?>"><img src="img/edit.png"></a></td>
			<td><a href="delete.php?id=<?php echo $row['id'] ?>" OnClick="return confirm('Voulez-vous vraiment supprimer ?');"><img src="img/delete.png"></a></td>
	  </tr>
    <?php
    }
		mysqli_free_result($resultat);
    ?>
  </tbody>
</div>
  </table>
</tbody>
</div>
</body>
  </html>
