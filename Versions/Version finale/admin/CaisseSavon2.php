<<<<<<< HEAD
<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
    if (isset($_POST['nomCaisseSavon2']))
    {
        $nomCaisseSavon=$_POST['nomCaisseSavon2'];

        $req=$bd->prepare('INSERT INTO caisseSavon(nomCaisseSavon) VALUES (:nomCaisseSavon)');
        $req->bindParam(':nomCaisseSavon', $nomCaisseSavon);

        $req->execute();
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
        <label>Veuillez sélectionner une table de la base de données à consulter :</label>
        <select id="select button" name="select" class="bouton-admin">
            <option value="Admin.php">-</option>
            <option value="CaisseSavon2.php" selected>Caisses à Savon</option>
            <option value="Categorie2.php">Catégories</option>
            <option value="Confrerie2.php">Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </div>
        </form>
        <br><br>
        <form method="POST" action="">
            <label for="nomCaisseSavon2">Nom : </label>
            <input type="text" id="nomCaisseSavon2" name="nomCaisseSavon2" required><br><br>
            <button id="buttonAdd">Ajouter</button>
        </form>
        <br><br>
    <section class="presentation-conf">
            <div class="contenu">
                <?php
                    $db=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
                    $results=$db->query('SELECT idCaisseSavon, nomCaisseSavon FROM caissesavon');
                    $tab=$results->fetchAll();
                    $results->closeCursor();
                    $caissesSavon=count($tab);

                    class CaisseSavon
                    {
                        public $nomCaisseSavon="";

                        public function __construct($nomCaisseSavon)
                        {
                            $this->nomCaisseSavon=$nomCaisseSavon;
                        }

                        public function affichage()
                        {
                            echo $this->nomCaisseSavon."<br><br>";
                        }
                    }

                    $caisseSavon=array();
                    for($i=0;$i<$caissesSavon;$i++)
                    {
                        $caisseSavon[$i]=new CaisseSavon($tab[$i][1]);
                        $caisseSavon[$i]->affichage();
                        echo "<form method='POST' action='modifierCaisseSavon.php?id=".$tab[$i][0]."'><label for='editNomCaisseSavon'>Modifier le nom : </label><input type='text' id='editNomCaisseSavon' name='editNomCaisseSavon'> <button id='buttonEdit'>Effectuer les modifications</button></form><br>";
                        echo "<form method='POST' action='supprimerCaisseSavon.php?id=".$tab[$i][0]."'><button id='buttonSup'>Supprimer</button></form><br><br>";
                    }
                ?>
            </div>
        </section>
    </body>
=======
<?php
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
    if (isset($_POST['nomCaisseSavon2']))
    {
        $nomCaisseSavon=$_POST['nomCaisseSavon2'];

        $req=$bd->prepare('INSERT INTO caisseSavon(nomCaisseSavon) VALUES (:nomCaisseSavon)');
        $req->bindParam(':nomCaisseSavon', $nomCaisseSavon);

        $req->execute();
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
        <label>Veuillez sélectionner une table de la base de données à consulter :</label>
        <select id="select button" name="select" class="bouton-admin">
            <option value="Admin.php">-</option>
            <option value="CaisseSavon2.php" selected>Caisses à Savon</option>
            <option value="Categorie2.php">Catégories</option>
            <option value="Confrerie2.php">Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </div>
        </form>
        <br><br>
        <form method="POST" action="">
            <label for="nomCaisseSavon2">Nom : </label>
            <input type="text" id="nomCaisseSavon2" name="nomCaisseSavon2" required><br><br>
            <button id="buttonAdd">Ajouter</button>
        </form>
        <br><br>
    <section class="presentation-conf">
            <div class="contenu">
                <?php
                    $db=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
                    $results=$db->query('SELECT idCaisseSavon, nomCaisseSavon FROM caissesavon');
                    $tab=$results->fetchAll();
                    $results->closeCursor();
                    $caissesSavon=count($tab);

                    class CaisseSavon
                    {
                        public $nomCaisseSavon="";

                        public function __construct($nomCaisseSavon)
                        {
                            $this->nomCaisseSavon=$nomCaisseSavon;
                        }

                        public function affichage()
                        {
                            echo $this->nomCaisseSavon."<br><br>";
                        }
                    }

                    $caisseSavon=array();
                    for($i=0;$i<$caissesSavon;$i++)
                    {
                        $caisseSavon[$i]=new CaisseSavon($tab[$i][1]);
                        $caisseSavon[$i]->affichage();
                        echo "<form method='POST' action='modifierCaisseSavon.php?id=".$tab[$i][0]."'><label for='editNomCaisseSavon'>Modifier le nom : </label><input type='text' id='editNomCaisseSavon' name='editNomCaisseSavon'> <button id='buttonEdit'>Effectuer les modifications</button></form><br>";
                        echo "<form method='POST' action='supprimerCaisseSavon.php?id=".$tab[$i][0]."'><button id='buttonSup'>Supprimer</button></form><br><br>";
                    }
                ?>
            </div>
        </section>
    </body>
>>>>>>> 655e731da863e94c232829cfcd761537488f8f19
</html>