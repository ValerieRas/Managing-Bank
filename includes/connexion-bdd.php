<?php
// Entrer dans la base de données

try{
    $BDD= new PDO('mysql:host=localhost;dbname=managing-bank;charset=utf8','root','');
}catch(Exception $e){die ('Erreur:'.$e->getMessage()); }

?>