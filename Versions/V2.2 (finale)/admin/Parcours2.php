<?php
    $bd=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    if (isset($_POST['nomParcours2']) && isset($_POST['descriptif2']) && isset($_POST['distanceMetres2']))
    {
        $nomParcours=$_POST['nomParcours2'];
        $descriptif=$_POST['descriptif2'];
        $distanceMetres=$_POST['distanceMetres2'];

        $req=$bd->prepare('INSERT INTO parcours(nomParcours, descriptif, distanceMetres) VALUES (:nomParcours, :descriptif, :distanceMetres)');
        $req->bindParam(':nomParcours', $nomParcours);
        $req->bindParam(':descriptif', $descriptif);
        $req->bindParam(':distanceMetres', $distanceMetres);

        $req->execute();
    }
?>

<?php
    $db=new
    PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    $results=$db->query('SELECT idParcours, nomParcours, descriptif, distanceMetres FROM parcours');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $parcours_=count($tab);

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
?>

<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Espace d'administration</title>
         <link rel="stylesheet" href="../css/conf-pres.css">
         <link rel="stylesheet" href="../css/style.css">  
         <link rel="shortcut icon" href="../image/favicon.png">
    </head>
    <body>
        <h1 class="conf-titre">Espace d'administration</h1>
        <form method="POST" action="Admin2.php">
        <div class="bouton-admin">
        <label>Veuillez s??lectionner une table de la base de donn??es ?? consulter :</label>
        <select id="select button" name="select" class="bouton-admin">
            <option value="Admin.php">-</option>
            <option value="CaisseSavon2.php">Caisses ?? Savon</option>
            <option value="Categorie2.php">Cat??gories</option>
            <option value="Confrerie2.php">Confr??ries</option>
            <option value="Parcours2.php" selected>Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </div>
        </form>
        <br><br>
        <form method="POST" action="">
            <label for="nomParcours2">Nom : </label>
            <input type="text" id="nomParcours2" name="nomParcours2" required><br><br>
            <label for="descriptif2">Description : </label>
            <input type="text" id="descriptif2" name="descriptif2" required><br><br>
            <label for="distanceMetres2">Distance en m??tres : </label>
            <input type="text" id="distanceMetres2" name="distanceMetres2" required><br><br>
            <button id="buttonAdd">Ajouter</button>
        </form>
        <br><br>
        <section  class="presentation-conf">
            <div class="contenu">
                <?php         
                    $parcours=array();
                    for($i=0;$i<$parcours_;$i++)
                    {
                        $parcours[$i]=new Parcours($tab[$i][1], $tab[$i][2], $tab[$i][3]);
                        $parcours[$i]->affichage();
                        echo "<form method='POST' action='modifierParcours.php?id=".$tab[$i][0]."'><label for='editNomParcours'>Modifier le nom : </label><input type='text' id='editNomParcours' name='editNomParcours'><label for='editDescriptif'> Modifier le descriptif : </label><input type='text' id='editDescriptif' name='editDescriptif'><label for='editDistanceMetres'> Modifier la distance : </label><input type='text' id='editDistanceMetres' name='editDistanceMetres'> <button id='buttonEdit'>Effectuer les modifications</button></form><br>";
                        echo "<form method='POST' action='supprimerParcours.php?id=".$tab[$i][0]."'><button id='buttonSup'>Supprimer</button></form><br><br>";
                    }
                ?>
            </div>
        </section>
    </body>
</html>