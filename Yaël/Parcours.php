<?php
    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomParcours, descriptif, distance FROM parcours';
    $resultats=$connection->query($requete);
    $tabProduits=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbproduits=count($tabProduits);

    class Parcours
    {
        public $nomParcours="";
        public $descriptif="";
        public $distance="";

        public function __construct($nomParcours, $descriptif, $distance)
        {
            $this->nomParcours=$nomParcours;
            $this->descriptif=$descriptif;
            $this->distance=$distance;
        }

        public function affichage()
        {
            echo $this->nomParcours."<br>".$this->descriptif."<br>Distance : ".$this->distance;
        }
    }
?>