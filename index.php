<html>
	<body>
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

		echo addition(10,5)."<br>";
		echo soustraction(10,2)."<br>";
		echo multiplication(5,6)."<br>";
		echo modulo(4,2)."<br>";
		echo division(5,2)."<br>";
		echo exponentielle(10,2)."<br>";
		?>
	</body>
<html>