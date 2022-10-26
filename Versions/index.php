<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-------------Header----------------->
    <?php include "header.php"; ?>


    <div id = "espNav"></div>
    
    <section class="banniere">
    </section>



<!-- -----------------Debut EvenementInedit-------------- -->
    <h1>Un Evenement Inedit</h1>
    <section id="contenu" class="para-image">
            <div class="paragraphe">
                <p>Lors de la troisième semaine de Juin, la ville du Puy-en-Velay replongera, le temps d'une fin de semaine, dans le XVI<sup>ème</sup> siècles si caractéristique des fêtes renaissance du Roi de l'Oiseau.</p>
            </div>
            <div class="container">
                <img class="image-first" src="image/bg.jpg">
                <div class="paragraphe">
                    <p>L'annuel coucours d'adresse du tir à l'arc laissera, en ce début d'été, la part belle à un événement jamais vu dans le monde entier : une course de Caisses à Savon couleurs Renaissance !</p>
                </div>
            </div>
    </section>
<!-- -----------------Fin EvenementInedit-------------- -->




<!-- -----------------Debut Confrerie-------------- -->
    <h1>Defendre Les Couleurs</h1>
    <section class="confdegrade">
            <div class="paragraphe confrerie-para">
                <p>Les habituelles confréries présentes dans le Velay chaque année reviendront défendre leurs couleurs dans une formule de tournoi médiéval revisitée. Elles seront représentées par leurs champions préalablement sélectionnés parmi la liste des inscrits; la participation est Ouverte à Tous !</p>
            </div>
            <div class="button-container">
                <button class="button-conf">En savoir plus</button>
            </div>  
    </section>
<!-- -----------------Fin Confrerie-------------- -->




<!-- -----------------Debut Programme-------------- -->
    <h1>Honneur aux Participants, Gloire aux Vainqueurs</h1>
    <section id="contenu" class="para-image3">
        <div class="paragraphe">
            <p>Les festivités débuteront vendredi soir, avec un défilé des participants, leurs caisses à savon et les couleurs qu'ils représentent.
                Il est évidemment possible de coucourir sous bannière personnelle ou neute, tant que le thème est respecté.
                Ils passeront devant la tribune installée pour l'occasion sur le boulevard Saint-Louis, où seront installés les jurys des différentes épreuves.
            </p>
        </div>
        <div class="button-container">
            <button class="button-conf">En savoir plus</button>
        </div>  
    </section>
<!-- -----------------Fin Programme-------------- -->



<!-- ------Debut Epreuves ------------>

<h1>Epreuves</h1>
<section class="epreuve-container">
    <div class="paragraphe">
        <p>Les épreuves sont au nombre de trois : deux pour les adultes (18ans et plus) et une pour les enfants (14 - 17 ans).
        </p>
    </div>
    <div class="button-container">
        <button class="button-conf">En savoir plus</button>
    </div>  
</section>
<!-- ------Fin Epreuves ------------>

<!-- -----------------Debut Footer-------------- -->

<?php include "footer.php"; ?>
<!-- -----------------Debut Programme-------------- -->
    
    <script src="js/lescript.js"></script>
    <!-- Ici, pour fixer la navbar -->

    
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY > 0);
        })
    </script>
</body>
</html>