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
		include "include.html";
		/*echo addition(10,5)."<br>";
		echo soustraction(10,2)."<br>";
		echo multiplication(5,6)."<br>";
		echo modulo(4,2)."<br>";
		echo division(5,2)."<br>";
		echo exponentielle(10,2)."<br>";
		echo verifieNum(18)."<br>";
		boucleFor()."<br>";
		boucleAssos()."<br>";*/
		boucle2DimAssos()."<br>";
		
		require "require.html";
		?>
	</body>
<html>