<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Espace d'administration</title>
         <link rel="stylesheet" href="css/conf-pres.css">
         <link rel="stylesheet" href="css/style.css">  
    </head>
    <body>
        <h1 class="conf-titre">Espace d'administration</h1>
        <form method="POST" action="Admin2.php">
        <div class="bouton-admin">
        <label>Veuillez sélectionner une table de la base de données à consulter :</label>
        <select id="select button" name="select" class="bouton-admin">
            <option value="Admin.php">-</option>
            <option value="CaisseSavon2.php">Caisses à Savon</option>
            <option value="Categorie2.php">Catégories</option>
            <option value="Confrerie2.php" selected>Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </div>
        </form>
        <br>
    <section class="presentation-conf">
    <div class="contenu">

<?php
    $db=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $results=$db->query('SELECT nomConfrerie, bio FROM confrerie');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $confreries=count($tab);

    class Confrerie
    {
        public $nomConfrerie="";
        public $bio="";

        public function __construct($nomConfrerie, $bio)
        {
            $this->nomConfrerie=$nomConfrerie;
            $this->bio=$bio;
        }

        public function affichage()
        {
            echo "<b>".$this->nomConfrerie."</b><br><br>".$this->bio."<br><br>";
        }
    }

    $confrerie=array();
    for($i=0;$i<$confreries;$i++)
    {
        $confrerie[$i]=new Confrerie($tab[$i][0], $tab[$i][1]);
        $confrerie[$i]->affichage();
    }
?>
</div>
</section>
</body>
</html>