<?php
    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomCaisseSavon FROM caisseSavon';
    $resultats=$connection->query($requete);
    $tabProduits=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbproduits=count($tabProduits);

    class CaisseSavon
    {
        public $nom="";
    }
?>