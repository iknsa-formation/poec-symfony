<div class="col-md-4" style="border: 1px blue solid">
	<h2>Ajouter un contact</h2>
<form action="addContact.php" method="POST">
  <div class="form-group">
    <label for="inputNom">Nom</label>
    <input type="text" class="form-control" id="inputNom" name="inputNom" placeholder="nom">
  </div>
  <div class="form-group">
    <label for="inputPrenom">Prénom</label>
    <input type="text" class="form-control" id="inputPrenom" name="inputPrenom" placeholder="premon">
  </div>
    <label for="inputTel">N° de téléphone</label>
    <input type="text" class="form-control" id="inputTel" name="inputTel" placeholder="telephone">
	 </br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>