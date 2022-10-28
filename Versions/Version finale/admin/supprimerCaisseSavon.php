<<<<<<< HEAD
<?php
    $idCaisseSavon=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
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
=======
<?php
    $idCaisseSavon=$_GET['id'];
    $bd=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
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
>>>>>>> 655e731da863e94c232829cfcd761537488f8f19
?>