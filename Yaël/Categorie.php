<?php
    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomCategorie, reglement, lienFederation FROM categorie';
    $resultats=$connection->query($requete);
    $tabCategorie=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbCategorie=count($tabCategorie);

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

    $tabCategorie=new Categorie($nbCategorie);
    $tabCategorie->affichage();

    // http://sdz.tdct.org/sdz/rogrammez-en-oriente-objet-en-php.html#Utiliserlaclasse
?>