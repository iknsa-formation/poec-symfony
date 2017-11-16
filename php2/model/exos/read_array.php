<?php
	 	include 'C:\wamp64\www\php2\composants\navbar.php';
	 	include 'C:\wamp64\www\php2\composants\header.html';
?>

<body>

<div class="content">
	<?php
	 		$fruit = array("pomme","banane","abricot");

	 		for ($i=0; $i < 3; $i++) 
	 		{ 
				echo("<br>");	 			
	 			echo($fruit["$i"]);	
	 		}

	 		$test = array('test1' => 'sécurité_du_code', 'test2' => 'fonctionalité_de_lappli');
?>
<br>
<?php 
	 		foreach ($test as $key => $value) 
	 		{
	 			echo("<br>");
	 			echo "le test niumero $key est le test de $value";
	 		}
	?>	
</div>


</body>
</html>
<php