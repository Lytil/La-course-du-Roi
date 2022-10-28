
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epreuves/Catégories</title>
    <link rel="stylesheet" href="css/epreuve.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <h1>Les Épreuves</h1>
    <section id="fond">
        <section id="epreuve">
            <div class="epreuve-container">
                <div class="paragraphe">
                    <p>Les épreuves sont au nombre de trois : deux pour les adultes (18ans et plus) et une pour les enfants (14 - 17 ans).
                    </p>
                </div>
            </div>
        </section>
        <h1>Les Catégories</h1>
        <section class="categorie">
            <?php
                include("categorie.php");
            ?>
        </section>
    </section>
   
    <section class="parcours">
    <h1>Les parcours</h1>
        <div class="plac-parc">
            <?php
                include("parcours.php");
            ?>
        </div>
    </section>
</body>
</html>


