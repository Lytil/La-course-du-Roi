<?php
    $idConfrerie=$_GET['id'];
    $bd=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    $req='DELETE FROM confrerie WHERE idConfrerie='.$idConfrerie;
    $results=$bd->query($req);

    if($results==true)
    {
        echo '<script>
        function redirect()
        {
        document.location.href="Confrerie2.php";
        }
        redirect()
        </script>';
    }
?>