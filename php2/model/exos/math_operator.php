	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		function addition($nbr1, $nbr2)
		{
			return $nbr1 + $nbr2;
		}		
		function soustraction($nbr1, $nbr2)
		{
			return	$nbr1 - $nbr2;
		}
		function multiplication($nbr1, $nbr2)
		{
			return	$nbr1 * $nbr2;
		}
		function division($nbr1, $nbr2)
		{
			return $nbr1 / $nbr2;
		}
		function exponentiel($nbr1, $nbr2)
		{
			pow($nbr1,$nbr2);
		}
		echo (addition(100,200) . '<br>');
		echo (soustraction(220,100) . '<br>');
		echo (multiplication(1,10) . '<br>');
		echo (division(1,10) . '<br>');
		echo (exponentiel(1,10) . '<br>');*/
?> 
</body>
</html>
<php