<?php
require_once "../includes/connexion-bdd.php";

class compte
{

 private $connexion;

// Connexion sur la base de donnée en utilisant la classe Database.
    public function __construct(){
       $BDD = new Database;
       $cnx = $BDD->connexionBDD();
       $this->connexion = $cnx;
    }

// Fonction pour la création d'un compte bancaire
   public function createNewAccount($idcli, $solde, $devise)
   {

    // Random numbers for account parameters
      $idcompte = mt_rand(99999999,1000000000);
      $codebanq = mt_rand(9999,10000);
      $codeGuichet = mt_rand(9999,10000);
      $cleRib = mt_rand(9,100);
    
    // Fonction date qui administre la date du jour
      $dateCreation = date("j-m-Y");

    // écriture de la requête
    $sql= "INSERT INTO compte(idcompte, codeBanq, codeGuichet, cleRib, titulaire, solde, devise, dateCreation)
        VALUES (:idcompte, :codeBanq, :codeGuichet, :cleRib, :titulaire, :solde, :devise, :dateCreation)";
    
    // préparation de la requête
    $query=$this->connexion->prepare($sql);

    // On injecte les valeurs dans les paramètres
    $query -> bindvalue(':idcompte',);
    $query -> bindvalue(':codeBanq',);
    $query -> bindvalue(':codeGuichet',);
    $query -> bindvalue(':cleRib',);
    $query -> bindvalue(':titulaire',);
    $query -> bindvalue(':solde',);
    $query -> bindvalue(':devise',);
    $query -> bindvalue(':dateCreation',);

    // on execute la requete
    $query -> execute();

    return $query;
   }

// Fonction pour l'affichage de tous les comptes

   public function displayAccount()
   {
    $sql='SELECT * FROM compte';
        $reponse = $this->connexion->prepare($sql);
        $reponse->execute();
        return $reponse;
   }


// Affichage d'un seul compte

   public function display_oneAcc($ID)
   {
       $sql='SELECT * FROM compte WHERE idcompte=:idcompte';
       $reponse= $this->connexion->prepare($sql);
       $reponse->bindvalue(":idcompte",$ID);
       $reponse->execute();
       return $reponse;
   }

// Modification infos des comptes

  public function modifAccount($ID)
  {
     // écriture de la requête
     $sql="UPDATE compte SET titulaire='$titulaire', idcli='$idcli', solde ='$solde', devise='$devise' WHERE idcompte='$ID'";

     // Préparation de la requête

     $query= $this->connexion->prepare($sql);

     // on execute la requête

     $query->execute();

     return $query;
  }

  // Suppression des informations clients

  public function suppAccount($ID)
  {
      $query =$this->connexion->exec("DELETE FROM compte WHERE idcompte='$ID'");
      return $query;
  }
    
}
?>