<?php 
/*echo "hello world";

 $nom="kaoutar";
 $x=13.6;
 $tab = array("banane","pomme","orange");
echo $nom.'<br>'.$x.'<br>';

print_r($tab) ;*/

/*$nom="ait";
$prenom="kaoutar";
echo"nom:".$nom."<br>"."prenom:$prenom";//ON PEUT UTILISER les doubles cotes entre prenom:$prenom et pas le simple cote	*/

/*
$global='ma variable globale';
function test(){
	$locale = 'ma variable locale';
	echo $locale;

}
echo $global."<br>";
test();
*/
echo"<h1>les operation</h1>";
echo"addition"."<br>";
function addition($x,$y){
	
	 $c=$x+$y;
	 return $c;
}
echo addition(7,8)."<br>";

echo"modulo"."<br>";
function modulo($x,$y){
	$c=$x%$y;
	return $c;
} 
echo modulo(16,7)."<br>";


echo"soustraction"."<br>";
  function soustraction($x,$y){
  	$c=$x-$y;
  	return $c;
  }
  echo soustraction(12,9)."<br>";

echo"multiplication"."<br>";
  function multiplication($x,$y){
  	$resultat=$x*$y;
  	return $resultat;

  }
  echo multiplication(6,9)."<br>";

echo"division"."<br>";

  function division($x,$y){
  	$resultat=$x/$y;
  	return $resultat;

  }
  echo division(56,9)."<br>";


echo "exponentielle"."<br>";
 function exponentielle($x,$y){
  	$resultat=pow($x,$y);
  	return $resultat;

  }
  echo exponentielle(2,3)."<br>";


echo "static"."<br>";
function test()
{
	static $x=0;
	echo"le resultat obtenu est:".$x."<br>";
	$x++;
}
test();

test();
test();


?>