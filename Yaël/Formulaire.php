<?php
    $objetPDO=new PDO('mysql:host=localhost;port=3306;dbname=lcdr','root','');
    $PDOresults = $objetPDO->prepare('INSERT INTO participant() VALUES (NULL, :nomParticipant, :prenom, :age, :adresse, :telephone, :mail)');
    $PDOresults->bindValue(':nomParticipant', $nomParticipant, PDO::PARAM_STR);
    $PDOresults->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $PDOresults->bindValue(':age', $prenom, PDO::PARAM_STR);
    $PDOresults->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $PDOresults->bindValue(':telephone', $telephone, PDO::PARAM_STR);
    $PDOresults->bindValue(':mail', $mail, PDO::PARAM_STR);
    $PDOresults->execute();
?>