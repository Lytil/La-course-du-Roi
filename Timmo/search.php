<?php
$debutsaisi=$_GET["term"];

$connection = new 
PDO('mysql:host=localhost:3306;dbname=lcdr','root','');
$requete='SELECT nomConfrerie FROM confrerie WHERE nom LIKE("%'.$debutsaisi.'")';
$resultats=$connection->query($requete);
$tableau=$resultats->fetchAll();
$resultats->closeCursor();

$donnees=array();



/* on récupère les données, par exemple dans une BDD avec
$requete='SELECT nomConfrerie FROM confrerie WHERE nom LIKE("%'.$debutsaisi.'")';
$resultatsConf=$connection->query($requete);
$tableau=$resultatsConf->fetchAll();
$resultatsConf->closeCursor();*/

// ici, données fictives : il faut un tableau indexé de tableaux associatifs
/* value et id pour chaque élément ... et on pourra faire ui.item.value et ui.item.id en Js
$donnees[0]["value"]="Linux";
$donnees[0]["id"]=1;
$donnees[1]["value"]="Windows";
$donnees[1]["id"]=2;
*/


// encodage au format JSON 
$donneesJson = json_encode($resultats, JSON_HEX_APOS); 

// remplacement des \\n qui peuvent causer des erreurs en JavaScript 
$donneesJson = str_replace("\\n", " ", $donneesJson); 

// on écrit les données 
echo $donneesJson;

?>
