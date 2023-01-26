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

    public function createnewclient($NOM, $PRENOM,$DATE,$ADRESSE,$TEL)
    {
        $idcli= mt_rand();

        // écriture de la requête
        $sql="INSERT INTO client (idcli,nom,prenom,dateNaissance,adresse,tel)
        VALUES (:idcli,:nom,:prenom,:dateNaissance,:adresse,:tel)";

        // Préparation de la requête

        $query=$this->connexion->prepare($sql);


        // On injecte les valeurs

        $query->bindvalue(":idcli",$idcli);
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

    // Affichage d'un seul client

    public function display_oneCli($ID)
    {
        $sql='SELECT * FROM CLIENT WHERE idcli=:idcli';
        $reponse= $this->connexion->prepare($sql);
        $reponse->bindvalue(":idcli",$ID);
        $reponse->execute();
        return $reponse;
    }

    // modification des informations clients

    public function modifclient($ID,$NOM,$PRENOM,$DATE,$ADRESSE,$TEL)
    {
      

        // écriture de la requête
        $sql="UPDATE client SET nom='$NOM', prenom='$PRENOM', dateNaissance='$DATE', adresse='$ADRESSE',
        tel='$TEL' WHERE idcli='$ID'";

        // Préparation de la requête

        $query= $this->connexion->prepare($sql);

        // on execute la requête

        $query->execute();

        return $query;
    
    }


    // Suppression des informations clients

    public function suppclient($ID)
    {
        $query =$this->connexion->exec("DELETE FROM CLIENT WHERE idcli='$ID'");
        return $query;
    }


    //  Selection auto de l'identifiant client lors de la création de compte

    // public function displayidcli($titulaire)
    // {
    //     $sql='SELECT idcli FROM CLIENT WHERE nom=:nom';
    //     $reponse= $this->connexion->prepare($sql);
    //     $reponse->bindvalue(":nom",$titulaire);
    //     $reponse->execute();
    //     return $reponse;
    // }
}
?>