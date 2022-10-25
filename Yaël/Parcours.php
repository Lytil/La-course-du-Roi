<?php
    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomParcours, descriptif, distanceMetres FROM parcours';
    $resultats=$connection->query($requete);
    $tabParcours=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbParcours=count($tabParcours);

    class Parcours
    {
        public $nomParcours="";
        public $descriptif="";
        public $distanceMetres="";

        public function __construct($nomParcours, $descriptif, $distanceMetres)
        {
            $this->nomParcours=$nomParcours;
            $this->descriptif=$descriptif;
            $this->distanceMetres=$distanceMetres;
        }

        public function affichage()
        {
            echo $this->nomParcours."<br>".$this->descriptif."<br>Distance : ".$this->distanceMetres;
        }
    }

    $tabParcours=new Parcours($nbParcours);
    $tabParcours->affichage();
?>