<?php
require_once "data.php";
?>
<!doctype html>
<html>

	<head>
		<title>php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="test">
			<h1>Liste des personnes</h1>
			<?php
			$untableau = array(
				1 => array ("prenom" =>"moussa","nom"=>"camara","moyenne"=>"15"),
				2 => array ("prenom" =>"khalid","nom"=>"sookia","moyenne"=>"19"),
				3 => array ("prenom" =>"noemie","nom"=>"kifia","moyenne"=>"9"),
				4 => array ("prenom" =>"jean","nom"=>"dupont","moyenne"=>"7"),
				5 => array ("prenom" =>"alex","nom"=>"cool","moyenne"=>"10"));


			foreach ($untableau as $key1 => $value1){
				echo "personne°:".$key1."<br/>";

				foreach($value1 as $key2 => $value2 ){
					echo $key2."=>".$value2."<br/><br/>";
				}
			};	
			?></div>

		<div class="test2">
			<h1>Personnes admis</h1>
			<?php
			foreach($untableau as $key1 => $value){
				if($value['moyenne']>9){
					echo "personne no".$key1."<br/>";

					foreach ($value as $key2 => $value2){
						echo $key2."=>".$value2."<br/><br/>";
					}
				}
			}
			?></div>
		<div class="test3">
			<h1>Personne nons admis</h1>
			<?php
			foreach($untableau as $key1 => $value){
				if($value['moyenne']<9){
					echo "personne no".$key1."<br/>";

					foreach ($value as $key2 => $value2){
						echo $key2."=>".$value2."<br/><br/>";
					}
				}
			}

			?>
			
		</div>
		<?php
			require_once "list.php";
			?>
		
		<span>
			<form class="table" action="form.php" method="post" id="form">
				<div>
					<label class="glyphicon glyphicon-glyphicon-user">Nom:</label>
					<input type="text" id="nom" name="lastname" required/>
				</div>
				<div>
					<label>Prenom:</label>
					<input type="text" id="prenom" name="firstname" required/>
				</div>
				<div>
					<label>Adresse</label>
					<input type="text" id="adresse" name="adresse" required/>
				</div>
				<div>
					<label>fonction</label>
					<input type="text" id="fonction" name="fonction" required/>
				</div>
				<div>
					<input type="submit" id="envoye" value="envoyé" required/>
				</div>
				
			</form>
			<form name="my_form" method="post" action="index.php" id="btn_delete">
					Utilisateur: <input type="text" name="username_delete"><br />
					<input type="submit" name="btn_delete" value="Supprimer utilisateur" id="btn_delete" />
					<form name="update" method="post" action="index.php">
						<input type="submit" name="btn_update" value="mise ajour tableau"/>
					</form>
				</form>
		</span>
		<?php 
		
		//require_once "btn_delete.php";
		//require_once "edite.php";
		?>
	</body>
</html>
