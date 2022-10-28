<<<<<<< HEAD
<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
    $results=$db->query('SELECT nomParcours, descriptif, distanceMetres FROM parcours');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $parcours_=count($tab);

    class Parcours
    {
        public $nomParcours="";
        public $descriptif="";
        public $distanceMetres="";

        public function __construct($nomParcours, $descriptif, $distanceMetres)
        {
            $this->nomParcours=$nomParcours;
            $this->descriptif=$descriptif;
            $this->distanceMetres=$distanceMetres;
        }

        public function affichage()
        {
            echo "<b class='cat'>".$this->nomParcours."</b><br><br><div class='espace'><p>".$this->descriptif."</p><br><p>Distance : ".$this->distanceMetres."</p><br><br></div>";
        }
    }

    $parcours=array();
    for($i=0;$i<$parcours_;$i++)
    {
        $parcours[$i]=new Parcours($tab[$i][0], $tab[$i][1], $tab[$i][2]);
        $parcours[$i]->affichage();
    }
=======
<?php
    $db=new PDO('mysql:host=localhost;port=3306;dbname=tillyt_lcdr','tillyt_lcdr','pasycraindre');
    $results=$db->query('SELECT nomParcours, descriptif, distanceMetres FROM parcours');
    $tab=$results->fetchAll();
    $results->closeCursor();
    $parcours_=count($tab);

    class Parcours
    {
        public $nomParcours="";
        public $descriptif="";
        public $distanceMetres="";

        public function __construct($nomParcours, $descriptif, $distanceMetres)
        {
            $this->nomParcours=$nomParcours;
            $this->descriptif=$descriptif;
            $this->distanceMetres=$distanceMetres;
        }

        public function affichage()
        {
            echo "<b class='cat'>".$this->nomParcours."</b><br><br><div class='espace'><p>".$this->descriptif."</p><br><p>Distance : ".$this->distanceMetres."</p><br><br></div>";
        }
    }

    $parcours=array();
    for($i=0;$i<$parcours_;$i++)
    {
        $parcours[$i]=new Parcours($tab[$i][0], $tab[$i][1], $tab[$i][2]);
        $parcours[$i]->affichage();
    }
>>>>>>> 655e731da863e94c232829cfcd761537488f8f19
?>