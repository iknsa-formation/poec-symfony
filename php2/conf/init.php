<?php

//Initialisation Session
session_start();

//Initialisation BDD
require_once 'config/connection.php';

//Ajout des méthodes de FlashBag
require_once 'util/flashbag.php';

//Ajout des méthodes d'utilisateur
require_once 'util/utilisateur.php';
