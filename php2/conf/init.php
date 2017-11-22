<?php

//Initialisation Session
session_start();

//Initialisation BDD
require_once 'conf/connection.php';

/*//Ajout des méthodes de FlashBag
require_once 'util/flashbag.php';
*/
//Ajout des méthodes d'utilisateur
require_once 'user/user.php';
