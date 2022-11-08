<?php
    $db=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
?>

<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Espace d'administration</title>
        <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/conf-pres.css">
        <link rel="shortcut icon" href="../image/favicon.png">
    </head>
    <body>
        <h1>Espace d'administration</h1>
        <form method="POST" action="Admin2.php">
        <label>Veuillez sélectionner une table de la base de données à consulter :</label>
        <select id="select" name="select">
            <option value="Admin.php" selected>-</option>
            <option value="CaisseSavon2.php">Caisses à Savon</option>
            <option value="Categorie2.php">Catégories</option>
            <option value="Confrerie2.php">Confréries</option>
            <option value="Parcours2.php">Parcours</option>
            <option value="Participant2.php">Participants</option>
        </select>
        <button id="button">Consulter</button>
        </form> 
    </body>
</html>