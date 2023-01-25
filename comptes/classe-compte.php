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

   public function createNewAccount($titulaire,$idcli, $solde, $Devise)
   {

    // Random numbers for account parameters
      $idcompte = mt_rand(99999999,1000000000);
      $codebanq = mt_rand(9999,10000);
      $codeGuichet = mt_rand(9999,10000);
      $cleRib = mt_rand(9,100);
    
    // Fonction date qui administre la date du jour
      $dateCreation = date("j-m-Y");

    // écriture de la requête
    $sql= "INSERT INTO compte(idcompte, codeBanq, codeGuichet, cleRib, titulaire, idcli, solde, devise, dateCreation)
        VALUES (:idcompte, :codeBanq, :codeGuichet, :cleRib, :titulaire,:idcli, :solde, :devise, :dateCreation)";
    
    // préparation de la requête
    $query=$this->connexion->prepare($sql);

    // On injecte les valeurs dans les paramètres
    $query -> bindvalue(':idcompte',$idcompte);
    $query -> bindvalue(':codeBanq',$codebanq);
    $query -> bindvalue(':codeGuichet',$codeGuichet);
    $query -> bindvalue(':cleRib',$cleRib);
    $query -> bindvalue(':titulaire',$titulaire);
    $query -> bindvalue(':idcli',$idcli);
    $query -> bindvalue(':solde',$solde);
    $query -> bindvalue(':devise',$Devise);
    $query -> bindvalue(':dateCreation',$dateCreation);

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

  public function modifAccount($ID, $titulaire, $solde, $devise)
  {
     // écriture de la requête
     $sql="UPDATE compte SET titulaire='$titulaire', solde ='$solde', devise='$devise' WHERE idcompte='$ID'";

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



//   Fonction pour selectionner le solde d'un compte
  private function Selectsolde()
  {
   $sql = 'SELECT solde FROM compte WHERE titulaire = :idcompte';
        $result = $this->execReq($sql);
        $result->bindvalue(":idcompte",$id);
        $result->execute();
        return $result;
  }


// Fonction pour mis à jour du solde d'un compte
  private function Updatesolde()
  {
   $sql = 'UPDATE compte SET solde = :soldecompte WHERE titulaire = :titulairecompte';
        $result = $this->execReq($sql);
        $result->bindvalue(":soldecompte",$montant);
        $result->bindvalue(":titulairecompte",$compte);
        $result->execute();
        return $result;
  }


// Fonction pour créditer un compte
 public function creditcompter($titulaire, $montant)
 {
   $query = $this->Selectsolde($titulaire);
      $solde = $query->fetchColumn();
      $solde+=$montant;
      $this->Updatesolde($titulaire,$solde);
 }

// Fonction pour débiter un compte
 public function debitcompte($titulaire, $compte)
 {
   $query = $this->Selectsolde($titulaire);
      $solde = $query->fetchColumn();
      $solde-=$montant;
      $this->Updatesolde($titulaire,$solde);
 }
}
?>