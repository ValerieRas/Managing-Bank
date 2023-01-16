<?php
require_once "../includes/connexion-bdd.php";

class client{

    private $connexion;

    // Connexion sur la Database.
    
    public function __construct(){
        $BDD = new Database;
        $cnx = $BDD->connexionBDD();
        $this->connexion = $cnx;
    }

    // Création d'un nouveau client

    public function createnewclient($nom,$prenom,$dateNaissance,$adresse,$tel)
    {
        $idcli= mt_rand();

        // écriture de la requête
        $sql="INSERT INTO client (idcli,nom,prenom,dateNaissance,adresse,tel)
        VALUES (:idcli,:nom,:prenom,:dateNaissance,:adresse,:tel)";

        // Préparation de la requête

        $query= $BDD->prepare($sql);


        // On injecte les valeurs

        $query->bindvalue(":idcli",$ID);
        $query->bindvalue(":nom",$NOM);
        $query->bindvalue(":prenom",$PRENOM);
        $query->bindvalue(":dateNaissance",$DATE);
        $query->bindvalue(":adresse",$ADRESSE);
        $query->bindvalue(":tel",$TEL);

        // on execute la requête

        $query->execute();

        return $query;
    }


    // Affichage de tous les clients

    public function displayclient()
    {
        $sql='SELECT * FROM CLIENT';
        $reponse = $this->connexion->prepare($sql);
        $reponse->execute();
        return $reponse;
    }


    // modification des informations clients

    public function modifclient($nom,$prenom,$dateNaissance,$adresse,$tel)
    {
        // Modification sur la base de donnée.
    
        $query= $BDD->exec("UPDATE client SET nom='$NOM', prenom='$PRENOM', dateNaissance='$DATE', adresse='$ADRESSE',
        tel='$TEL' WHERE idcli='$ID'");
    
        return $query;
    }


    // Suppression des informations clients

    public function suppclient($idcli)
    {
        $query = $BDD->exec("DELETE FROM clients WHERE idcli='$ID'");
        return $query;
    }
}
?>