<!doctype html>
<html>
	<head></head>
	<body>
		<div style="background-color:orange;border-radius:5%;border:2px solid black;text-align:center">
			<?php
			$personnes = array(
				1=>array('prenom' => 'moussa','nom' => 'camara','telephone' => '012345679'),
				2=>array('prenom' => 'khalid','nom' => 'sooda','telephone' => '01234678'),
				3=>array('prenom' => 'khalid','nom' => 'sooda','telephone' => '012346785')
			);
			
			foreach($personnes as $key1 => $value)
			{
			  echo "personne n°:" . $key1 . "<br />";
				foreach ($value as $key2=>$value2)
				{
				  echo $key2 ."===>" . $value2 . "</strong><br />\n";
				}
			}
			echo "<br><br>";
			?>
		</div>
		<div style="margin-top:5%"><?php
			require 'test.php';
				?></div>
	</body>
</html>