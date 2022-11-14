<?php
    $bd=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    if (isset($_POST['nomParticipant']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail']))
    {
        $nomParticipant=$_POST['nomParticipant'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $mail=$_POST['mail'];

        $req=$bd->prepare('INSERT INTO participant(nomParticipant, prenom, age, adresse, telephone, mail) VALUES (:nomParticipant, :prenom, :age, :adresse, :telephone, :mail)');
        $req->bindParam(':nomParticipant',$nomParticipant);
        $req->bindParam(':prenom',$prenom);
        $req->bindParam(':age',$age);
        $req->bindParam(':adresse',$adresse);
        $req->bindParam(':telephone',$telephone);
        $req->bindParam(':mail',$mail);

        $req->execute();
    }

    $db=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    $results=$db->query('SELECT nomParticipant, prenom, age, adresse, telephone, mail FROM participant');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $participants=count($tab);

    class Participant
    {
        public $nomParticipant="";
        public $prenom="";
        public $age="";
        private $adresse="";
        private $telephone="";
        private $mail="";

        public function __construct($nomParticipant, $prenom, $age, $adresse, $telephone, $mail)
        {
            $this->nomParticipant=$nomParticipant;
            $this->prenom=$prenom;
            $this->age=$age;
            $this->adresse=$adresse;
            $this->telephone=$telephone;
            $this->mail=$mail;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/participant.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="container-form">
        <br>
            <div class="container">
        <form method="POST" action="">
            <p>Pré-inscription à la course</p>
            <input type="text" id="nomParticipant" name="nomParticipant" placeholder="Nom" required>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required><br>
            <input type="number" id="age" name="age" min="14" max="99" placeholder="Âge" required><br>
            <input type="text" id="adresse" name="adresse" placeholder="Adresse" required><br>
            <input type="int" class="telephone" id="telephone" name="telephone" pattern="[0]{1}[0-9]{9}" placeholder="Téléphone" required>
            <input type="email" class="mail" id="mail" name="mail" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" placeholder="Email" required><br>
            <input type="submit" id="submit" value="Valider"><br>
            <a class="btn-retour" href="../index.php">Retour à l'accueil</a>

            <p class="msgValidation"><?php echo $msg?></p>
        </form>
    </div>
    </div>

</body>
</html>