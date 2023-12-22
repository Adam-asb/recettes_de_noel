<?php

    $dbConnection = new PDO("mysql:host=127.0.0.1; dbname=noel", "root", "");
    $sqlRequest = "SELECT * FROM noel";
    $request = $dbConnection->prepare($sqlRequest);
    $request->execute();

    $recettes = [];
    while ($row = $request->fetch()) {
        $recettes[] = $row;
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Les recettes de Bob</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">   
</head>


<body>
    <br><br>
    <nav>
        <ul>
            <li><a href="#introduction-du-personnage">À propos de Bob</a></li>
            <li><a href="#experiences">Mes recettes</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <br><br>
    <header> 
                <img src="logo.png">
    </header>


    <section id="introduction-du-personnage">
        <h1>À propos de Bob</h1>
        <br><br>
        <p> Bienvenue dans l'univers délicieusement festif de Bob, le cuisinier passionné qui réchauffe les cœurs avec ses créations culinaires exceptionnelles pour les fêtes de fin d'année ! <br>Originaire de la région où les traditions culinaires et les célébrations de Noël sont une véritable institution, Bob a grandi avec une passion pour la cuisine qui s'est transformée au fil des ans en une véritable expertise. <br>Fort de son amour pour les saveurs authentiques et les moments chaleureux en famille, Bob a décidé de partager son talent en créant ce site internet dédié aux recettes de Noël. Avec une approche créative et un souci du détail, Bob met en avant des plats gourmands et réconfortants, tout en partageant des astuces et des anecdotes qui transmettent l'esprit festif qui l'anime. <br>Rejoignez Bob dans cette aventure culinaire et découvrez des recettes qui émerveilleront vos papilles et feront de chaque fête une expérience inoubliable.</hp>
    </section>



    <section id="experiences">
        <h1>Mes recettes</h1>
        <p>
            Bienvenue dans "Mes Recettes", le cœur gourmand de mon univers culinaire festif. Explorez cette section pour découvrir une collection soigneusement élaborée de délices de saison, des classiques réinventés aux créations originales, conçues pour émerveiller vos proches lors des célébrations de Noël.</p>
      

      


     <section id="recette-list-section">
            <h2>Liste des Recettes</h2>
            <ul class="rectte-list">
                <?php
                foreach($recettes as $recette) {
                        echo '<a href="recettes.php?id=' . $recette['id'] . '">';
                        echo '<img src = "data:image/png;base64, ' . base64_encode($recette['photo']) . '" />';
                        echo '</a>';

                        echo '<div class="film-info-box">';
                        echo '<a href="recettes.php?id=' . $recette['id'] . '">';
                        echo '<h3>' . $recette['nom'] . '</h3>';
                        echo '</a>';

                        /*echo '<p class="recette-info">Temps de préparation en min : ' . $recette['temps'] . '</p>';
                        echo '<p class="recette-info">Difficulté : ' . $recette['difficulte'] . '</p>';
                        echo '<p class="recette-info">Liste des ingrédients : ' . $recette['liste_ingredient'] . '</p>';*/
                        echo '</div>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </section>
        <footer>



    <section id="contact">
         <h1>Contact</h1>
        <a href="https://www.facebook.com/?locale=fr_FR">Facebook</a>  <a href="https://www.instagram.com/">Instagram</a> <a href="https://www.marmiton.org/">Marmiton</a>
        </section>


