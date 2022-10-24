<?php
    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomCategorie, reglement, lienFederation FROM categorie';
    $resultats=$connection->query($requete);
    $tabProduits=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbproduits=count($tabProduits);

    class Categorie
    {
        public $nomCategorie="";
        public $reglement="";
        public $lienFederation="";

        public function __construct($nomCategorie, $reglement, $lienFederation)
        {
            $this->nomCategorie=$nomCategorie;
            $this->reglement=$reglement;
            $this->lienFederation=$lienFederation;
        }

        public function affichage()
        {
            echo "Catégorie : ".$this->nomCategorie."<br>".$this->reglement."<br>".$this->lienFederation;
        }
    }
?>