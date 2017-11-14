<?php
	 	include 'C:\wamp64\www\php2\composants\navbar.php';
	 	include 'C:\wamp64\www\php2\composants\header.html';
?>

<body>

<div class="content">
<?php 
		 $my_array = array( 1 => array("prenom" => "yannick","number" => "0698864521" , "nom" => "blakime"),
							2 => array("prenom" => "yoan", "number" => "0698864521" , "nom" => "blake"));

	 		foreach ($my_array as $key => $value) 
	 		{
	 			echo $key /*. $value*/;
	 			print_r($my_array["$key"]);
/*	 			print_r($my_array["$value"]);
*/
	 		}
?>	
</div>


</body>
</html>
<php