<?php
    $db=new PDO('mysql:host=mysql-courseduroi.alwaysdata.net;dbname=courseduroi_lcdr','287105_lcdr','pasycraindre');
    $results=$db->query('SELECT nomConfrerie, bio FROM confrerie');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $confreries=count($tab);

    class Confrerie
    {
        public $nomConfrerie="";
        public $bio="";

        public function __construct($nomConfrerie, $bio)
        {
            $this->nomConfrerie=$nomConfrerie;
            $this->bio=$bio;
        }

        public function affichage()
        {
            echo '<b class="conf-titre">'.$this->nomConfrerie.'</b><div class="espace"><p><br>'.$this->bio.'<br><br><p> </div>';
        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confrerie</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/favicon.png">
</head>
<body>

    <?php include("header.php");?>
    <h1 class="debut">Confreries</h1>
    <section class="confdegrade">
        <div class="paragraphe confrerie-para">
            <p>Les habituelles confréries présentes dans le Velay chaque année reviendront défendre leurs couleurs dans une formule de tournoi médiéval revisitée. Elles seront représentées par leurs champions préalablement sélectionnés parmi la liste des inscrits; la participation est Ouverte à Tous !</p>
        </div>
    </section>
    <h1>Presentation des Confreries</h1>
    <section  class="presentation-conf">
        <div class="contenu">
            <?php
                $confrerie=array();
                for($i=0;$i<$confreries;$i++)
                {
                    $confrerie[$i]=new Confrerie($tab[$i][0], $tab[$i][1]);
                    $confrerie[$i]->affichage();
                }
            ?>
        </div>
    </section>
    <?php include("footer.php");?>
        
    <script type="text/javascript">
        //Stick nav
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY > 0);
        })
   </script>
</body>
</html>