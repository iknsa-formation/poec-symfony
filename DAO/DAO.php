<?php
require 'DAO/parametes.php';

class DAO
{
    private $parameters = null;

    public function __construct()
    {
        $this->parameters = (new Parameters())->get();
        if (
            !isset($this->parameters["dbhost"]) ||
            !isset($this->parameters["dbname"]) ||
            !isset($this->parameters["dbuser"]) ||
            !isset($this->parameters["dbpass"]) 
        ) {
            die("Il manque les informations pour se connecter à la base de donnée");
        }
    }

    public function connect()
    {
        try {
            return new PDO(
                "mysql:host=" . $this->parameters["dbhost"] .
                ";dbname=" . $this->parameters["dbname"] . ";",
                $this->parameters["dbuser"], $this->parameters["dbpass"]
            );
        } catch (\PDOException $e) {
            if (!$this->parameters["debug"]) {
                exit("Unable to connect to db");
            } else {
                var_dump($e);
                exit("Unable to connect to db");
            }
        }
    }
}
?>