<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Espace d'administration</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <h1>Espace d'administration</h1>
        <form method="POST" action="Admin2.php">
        <label>Veuillez sélectionner une table de la base de données à consulter :</label>
        <select id="select" name="select">
            <option value="Admin.php">-</option>
            <option value="CaisseSavon2.php">Caisses à Savon</option>
            <option value="Categorie2.php" selected>Catégories</option>
            <option value="Confrerie2.php">Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </form>
        <br>
    </body>
</html>

<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT nomCategorie, reglement, lienFederation FROM categorie');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $categories=count($tab);

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
            echo "Catégorie : ".$this->nomCategorie."<br><br>".$this->reglement."<br><br>".$this->lienFederation."<br><br>";
        }
    }

    $categorie=array();
    for($i=0;$i<$categories;$i++)
    {
        $categorie[$i]=new Categorie($tab[$i][0], $tab[$i][1], $tab[$i][2]);
        $categorie[$i]->affichage();
    }
?>