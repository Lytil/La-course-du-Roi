<?php
    $idParcours=$_GET['id'];
    $bd=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    $req='DELETE FROM parcours WHERE idParcours='.$idParcours;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="Parcours2.php";
        }
        redirect()
        </script>';
    }
?>