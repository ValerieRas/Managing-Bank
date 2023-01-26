<?php

// Classe permettant la connexion à la base de donnée

class database {

    // les paramètres de connexion à la base de données

    private $dbname = 'managing-bank';
    private $dbuser = 'root';
    private $dbpwd = '';
    private $dbhost = 'localhost';
    public $connexion;

    // fonction pour se connecter à la base de données
    public function connexionBDD(){
        $this->connexion = null;
        try{
            $this->connexion = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpwd);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //permet d'afficher les erreurs si ça existe
        }
        catch (PDOException $exception){
            echo "Erreur de connexion: ".$exception->getMessage();
        }
        return $this->connexion;
    }


}

?>