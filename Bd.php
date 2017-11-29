<?php
	class Bd extends PDO{
		function __construct(){
			try{
				parent::__construct('mysql:host=localhost;dbname=poec-symfony','root','');
			}
			catch(Exception $e){
				echo $e." : Erreur con"; die;
			}
		}
	}
?>