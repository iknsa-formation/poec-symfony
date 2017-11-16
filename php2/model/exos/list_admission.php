<?php
	 	include 'composants\navbar.php';
	 	include 'composants\header.html';
?>
<body>
	<div class="content">
		<?php 
		 	$list_students = array(	1 => array("prenom" => "Moussa","nom" => "Camara" , "moyenne" => 15),
		 							2 => array("prenom" => "khalid","nom" => "Sookia" , "moyenne" => 19),
		 							3 => array("prenom" => "Noemie","nom" => "kifia" , "moyenne" => 9),
		 							4 => array("prenom" => "Jean","nom" => "dupont" , "moyenne" => 7),	
									5 => array("prenom" => "Alex", "nom" => "cool" , "moyenne" => 10));
		 	echo '<div class="list_students>"'; 		
			echo '<h1 style="text-aligne:center;">' . 'List des étudiants ' .'</h1>' . '<br>';
			foreach ($list_students as $key => $value)
			{
				echo  "student n°:". $key 	. "<br>";
				foreach ($value as $key1 => $value1)
					{
						echo $key1 . " : ". $value1 . "<br>";
					}
				echo "<br>";
			} 
			echo "</div>";
		?>
</div>
</body>
</html>
<php