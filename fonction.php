<?php 
	function tp1(){
		$string = "String";
		$int = 1;
		$table = array("test","test2");
		echo $string." <br>";
		echo $int." <br>";
		echo $table[0]." <br>";
	}
	function addition($x,$y){
		$res = $x + $y;
		return $res;
	}
	function soustraction($x,$y){
		$res = $x - $y;
		return $res;
	}
	function division($x,$y){
		$res = $x / $y;
		return $res;
	}
	function multiplication($x,$y){
		$res = $x * $y;
		return $res;
	}
	function modulo($x,$y){
		$res = $x % $y;
		return $res;
	}
	function exponentielle($x,$y){
		$res = pow($x,$y);
		return $res;
	}

	function verifieNum($num){
		// Pour Police
		if(substr($num,0,2) == 17){
			return "Police";
		}elseif(substr($num,0,2) == 18){// Pour Pompier
			return "Pompier";
		}else{
			if(substr($num,0,2) == 01){// Pour Fix
				return "Fix";
			}elseif(substr($num,0,2) == 08){// Pour Surtaxé
				return "Surtaxé";
			}else{// Pour Mobile
				if(substr($num,0,2) == 06){
					return "Mobile";
				}else{
					return "Incorrect";
				}
			}
		}
	}

	function boucleFor(){
		$etudiant = array("Moussa","Khalid","LOL","GOAT");
		for($i=0;$i<count($etudiant);$i++){
			echo $etudiant[$i]."<br>";
		}
	}
	function boucleAssos(){
		$etudiant = array("nom"=>"Moussa","prenom"=>"Khalid","level"=>"GOAT");

		foreach ($etudiant as $key => $value) {
			echo $key." : ".$value."<br>" ;
		}
	}
	function boucle2DimAssos(){
		$etudiant = array(
			1=>(array("nom"=>"Camara","prenom"=>"Moussa","telephone"=>"0123456789")),
			2=>(array("nom"=>"Sookia","prenom"=>"Khalid","telephone"=>"0614654586")),
			3=>(array("nom"=>"Moustakime","prenom"=>"Kifia","telephone"=>"071454565454"))
		);

		foreach ($etudiant as $key => $value) {
			echo "<br>Personne : ".$key."<br>";
			foreach ($value as $key2 => $value2) {
				echo $key2." : ".$value2."<br>" ;
			}
		}
	}

	function listeEtudiantExam(){
		$etudiant = array(
			1 => array("prenom" => "Moussa", "nom" => "Camara","moyen" => 15), 
			2 => array("prenom" => "Khalid", "nom" => "Sookia","moyen" => 19), 
			3 => array("prenom" => "Noemie", "nom" => "Kifia","moyen" => 9), 
			4 => array("prenom" => "Joan", "nom" => "Dupont","moyen" => 7), 
			5 => array("prenom" => "Alex", "nom" => "cool","moyen" => 10), 
		);
		return $etudiant;
	}
	function listEtu($list){
		foreach ($list as $key => $value) {
			echo "<tr>";
			echo "<td>".$key."</td>";
			echo "<td>".$value["prenom"]."</td>";
			echo "<td>".$value["nom"]."</td>";
			echo "<td>".$value["moyen"]."</td>";
			echo "</tr>";
		}
	}
	function trieEtuAdmis($list){
		foreach ($list as $key => $value) {
			if($value["moyen"] > 9){
				echo "<tr>";
				echo "<td>".$key."</td>";
				echo "<td>".$value["prenom"]."</td>";
				echo "<td>".$value["nom"]."</td>";
				echo "<td>".$value["moyen"]."</td>";
				echo "</tr>";
			}
		}
	}
	function trieEtuNonAdmis($list){
		foreach ($list as $key => $value) {
			if($value["moyen"] < 10){
				echo "<tr>";
				echo "<td>".$key."</td>";
				echo "<td>".$value["prenom"]."</td>";
				echo "<td>".$value["nom"]."</td>";
				echo "<td>".$value["moyen"]."</td>";
				echo "</tr>";
			}
		}
	}
	function verifieChampsForm($bd){
		if(!empty($_POST["txtFirstName"])){
			$firtName = $_POST["txtFirstName"];
			$lastName = $_POST["txtLastName"];
			$adresse = $_POST["txtAdresse"];
			$fonction = $_POST["txtFonction"];
			$tab = ["FirstName"=>$firtName,"LastName"=>$lastName,"Adresse"=>$adresse,"Fonction"=>$fonction];
			instructionBd($tab,$bd);
			return $tab;
		}else{
			return '
				<div class="alert alert-danger" role="alert">
    				<strong>Champs obligatoires!</strong> Vérifier votre saisie.
				</div>';
		}
	}
	function afficheResultatForm($tab){
		if(count($tab) > 1){
			foreach ($tab as $cle => $value) {
				echo "<div><p> <div>$cle : </div><div>$value</div></p></div>";
			}
		}else{
			echo $tab;
		}
	}
	function instructionBd($data,$bd){
		insertionUser($data,$bd);
		mysqli_close($bd);
	}
	function insertionUser($listeUsers,$bd){
		if(isset($_GET['id'])){
			// UPDTADE
			uptdateUser($listeUsers,$bd);
		}else{
			// INSERT
			$sql = "select lastname from users where lastname = '".$listeUsers["LastName"]."'";
			$select = mysqli_query($bd,$sql);
			$existe = mysqli_num_rows($select);
			if($existe){
				echo '
					<div class="alert alert-danger" role="alert">
	    				L\'Utilisateur <strong>'.$listeUsers["FirstName"].'</strong> existe déja.
					</div>';
			}else{
				$sql = "INSERT INTO users(firstname,lastname,adresse,fonction) 
				VALUES('".$listeUsers["FirstName"]."','".$listeUsers["LastName"]."','".$listeUsers["Adresse"]."','".$listeUsers["Fonction"]."')";
				$insert = mysqli_query($bd,$sql);
				if($insert){
					echo '
						<div class="alert alert-success" role="alert">
		    				<strong>Réussi!</strong> Utilisateur enregistré.
						</div>';
				}else{
					echo '
						<div class="alert alert-danger" role="alert">
		    				<strong>Erreur!</strong> Problème de requete.
						</div>';
				}
			}
		}
	}	
	function selectionUsers($bd){
		$sql = "SELECT * FROM users";
		$select = mysqli_query($bd,$sql);

		if($select){
			foreach ($select as $key => $value) {
				echo "<tr>";
				echo '<td>'.$value["id"].'</td>';
				echo '<td>'.$value["firstname"].'</td>';
				echo '<td>'.$value["lastname"].'</td>';
				echo '<td>'.$value["adresse"].'</td>';
				echo '<td>'.$value["fonction"].'</td>';
				echo '<td><button class="btn"><a href="modifications.php?id='.$value["id"].'">Modifier</a></button></td>';
				echo '<td><button class="btn"><a href="suppression.php?id='.$value["id"].'">Supprimer</a></button></td>';
				echo '</tr>';
			}
		}else{
			echo '
				<div class="alert alert-danger" role="alert">
    				<strong>Erreur!</strong> Problème de requete.
				</div>';
		}
		mysqli_close($bd);
	}
	function selectionUnUser($bd){
		
		$id = $_GET["id"];
		$sql = "SELECT * FROM users where id=".$id;
		$select = mysqli_fetch_assoc(mysqli_query($bd,$sql));

		if($select){
			$firstname = $select["firstname"];
			$lastname = $select["lastname"];
			$adresse = $select["adresse"];
			$fonction = $select["fonction"];
			$tab = array("firstname"=>$firstname,"lastname"=>$lastname,"adresse"=>$adresse,"fonction"=>$fonction);
			return $tab;
		}else{
			echo '
				<div class="alert alert-danger" role="alert">
    				<strong>Erreur!</strong> Problème de requete.
				</div>';
			return false;
		}
		mysqli_close($bd);
	}
	function uptdateUser($user,$bd){
		$id = $_GET["id"];
		$sql = "UPDATE users set firstname='".$user["FirstName"]."',lastname='".$user["LastName"]."', adresse='".$user["Adresse"]."', fonction='".$user["Fonction"]."' where id=".$id;
		$update = mysqli_query($bd,$sql);

		if($update){
			echo '
				<div class="alert alert-success" role="alert">
    				<strong>Réussi!</strong> Mise à jour éffectuées.
				</div>';
		}else{
			echo '
				<div class="alert alert-danger" role="alert">
    				<strong>Erreur!</strong> Problème de requete.
				</div>';
			return false;
		}
	}
	function supprimerUser($bd){
		$id = $_GET["id"];
		$sql = "DELETE FROM users where id=".$id;
		
		$delete = mysqli_query($bd,$sql);

		if($delete){
			echo '
				<div class="alert alert-success" role="alert">
    				<strong>Réussi!</strong> Mise à jour éffectuées.
				</div>';
		}else{
			echo '
				<div class="alert alert-danger" role="alert">
    				<strong>Erreur!</strong> Problème de requete.
				</div>';
			return false;
		}
	}
	function verifConnexion($bd){
		if(count($_POST)>0){
			$sql = "select mail,mdp,firstname,lastname from inscrit where mail='".$_POST['mail']."'";
			$res = mysqli_query($bd,$sql);
			$info = mysqli_fetch_assoc($res);
			$existe = mysqli_num_rows($res);

			if($existe){
				if(password_verify($_POST['mdp'], $info['mdp'])){
					session_start();
					$_SESSION['mail'] = $_POST['mail'];
					$_SESSION['mdp'] = $_POST['mdp'];
					$_SESSION['firstname'] = $info['firstname'];
					$_SESSION['lastname'] = $info['lastname'];
					
					return true;
				}
			}else{
				return false;
			}
		}else{
			// Saisie obligatoire
			return false;
		}
	}
	function verifSession(){
		if(!isset($_SESSION['mail'])){
			header('Location:../');
		}else{
			return true;
		}
	}
	function verifInscription($bd){
		$sql = "select mail from inscrit where mail='".$_POST['mail']."'";
		$res = mysqli_query($bd,$sql);
		$existe = mysqli_num_rows($res);

		if(count($_POST) > 0){
			if($existe){
				// Message exist deja
				header('Location:inscription.php?erreur=1');
			}else{
				$mdpCrypt = password_hash($_POST["mdp"],PASSWORD_BCRYPT);
				$sql = "INSERT INTO inscrit(firstname,lastname,mail,mdp) 
				VALUES('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["mail"]."','".$mdpCrypt."')";
				
				$insert = mysqli_query($bd,$sql);
				if($insert){
					session_start();
					$_SESSION['firstname'] = $_POST["firstname"];
					$_SESSION['lastname'] = $_POST["lastname"];
					$_SESSION['mail'] = $_POST["mail"];
					$_SESSION['mdp']= $_POST["mdp"];
					header('Location:./');
				}else{
					header('Location:./?erreur=2');
				}
			}
		}else{
			header('Location:../?erreur=3');
		}
	}
	function msgErreurInscription($e){
		$msg ='';
		if($e == 1){
			$msg ='
				<div class="alert alert-danger" role="alert">
					Cet mail est deja utilisé.
				</div>';
		}
		if($e == 2){
			$msg ='
				<div class="alert alert-danger" role="alert">
					<strong>Erreur!</strong> Une erreur c\'est produit.
				</div>';
		}
		if($e == 3){
			$msg ='
				<div class="alert alert-danger" role="alert">
					Saisie obligatoire.
				</div>';
		}
		if($e == 4){
			$msg ='
				<div class="alert alert-danger" role="alert">
					Votre mot de passe ou l\'email est incorrect.
				</div>';
		}
		return $msg;
	}
?>