<?php
    $objetPDO=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');

    if(isset($_POST['nomParticipant'])){$nomParticipant=$_POST['nomParticipant'];}else{$nomParticipant='';}
    if(isset($_POST['prenom'])){$prenom=$_POST['prenom'];}else{$prenom='';}
    if(isset($_POST['age'])){$age=$_POST['age'];}else{$age='';}
    if(isset($_POST['adresse'])){$adresse=$_POST['adresse'];}else{$adresse='';}
    if(isset($_POST['telephone'])){$telephone=$_POST['telephone'];}else{$telephone='';}
    if(isset($_POST['prenom'])){$prenom=$_POST['prenom'];}else{$prenom='';}
    if(isset($_POST['mail'])){$mail=$_POST['mail'];}else{$mail='';}

    $PDOresults=$objetPDO->prepare('INSERT INTO participant() VALUES (NULL, :nomParticipant, :prenom, :age, :adresse, :telephone, :mail)');
    $PDOresults->bindValue(':nomParticipant', $nomParticipant, PDO::PARAM_STR);
    $PDOresults->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $PDOresults->bindValue(':age', $prenom, PDO::PARAM_STR);
    $PDOresults->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $PDOresults->bindValue(':telephone', $telephone, PDO::PARAM_STR);
    $PDOresults->bindValue(':mail', $mail, PDO::PARAM_STR);
    $PDOresults->execute();

    $connection=new
    PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $requete='SELECT nomParticipant, prenom, age, adresse, telephone, mail FROM participant';
    $resultats=$connection->query($requete);
    $tabProduits=$resultats->fetchAll();
    $resultats->closeCursor();
    $nbproduits=count($tabProduits);

    class Participant
    {
        public $nomParticipant="";
        public $prenom="";
        public $age="";
        private $adresse="";
        private $telephone="";
        private $mail="";
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<body>
    <div class="container">
        <form>
            <p>Pré-inscription</p>
            <input type="text" id="nomParticipant" placeholder="Nom">
            <input type="text" id="prenom" placeholder="Prénom"><br>
            <input type="int" id="age" placeholder="Âge"><br>
            <input type="text" id="adresse" placeholder="Adresse"><br>
            <input type="int" id="telephone" placeholder="Téléphone">
            <input type="email" id="mail" placeholder="Email"><br>
            <input type="submit" id="submit" value="Valider"><br>
        </form>
    </div>
</body>