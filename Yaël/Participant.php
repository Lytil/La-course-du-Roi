<?php
    include_once("Formulaire.php");

    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomParticipant, prenom, age, adresse, telephone, mail FROM participant';
    $resultats=$connection->query($requete);
    $tabProduits=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbproduits=count($tabProduits);

    class Participant
    {
        public $nomParticipant="";
        public $prenom="";
        public $age="";
        private $adresse="";
        private $telephone="";
        private $mail="";
    }
?>