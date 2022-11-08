<?php
    $idCaisseSavon=$_GET['id'];
    $bd=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    $req='DELETE FROM caissesavon WHERE idCaisseSavon='.$idCaisseSavon;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="CaisseSavon2.php";
        }
        redirect()
        </script>';
    }
?>