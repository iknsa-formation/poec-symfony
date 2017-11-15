<!doctype html>
<html>
	<head>
		<title>php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="test"><h1>Liste des personnes</h1><?php
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
			
			<div class="test2"><h1>Personnes admis</h1><?php
			foreach($untableau as $key1 => $value){
				if($value['moyenne']>9){
					echo "personne no".$key1."<br/>";
					
					foreach ($value as $key2 => $value2){
						echo $key2."=>".$value2."<br/><br/>";
					}
				}
			}
			?></div>
			<div class="test3"><h1>Personne nons admis</h1><?php
			foreach($untableau as $key1 => $value){
				if($value['moyenne']<9){
					echo "personne no".$key1."<br/>";
					
					foreach ($value as $key2 => $value2){
						echo $key2."=>".$value2."<br/><br/>";
					}
				}
			}
			
			
			?></div>
	</body>
</html>
