<?php
    // Récupération des paramètres de 1'URL
    $idrecette = $_GET['id'];

    // Connexion à la BDD
    $dbConnection = new PDO("mysql:host=127.0.0.1; dbname=noel", "root", "");

    // Requête SQL
    $sqlRequest = "SELECT * FROM noel WHERE id=" . $idrecette;
    $request = $dbConnection->prepare($sqlRequest);
    $request->execute();

    // Récupération du résultat
    $recette = $request->fetch()

?>



<! DOCTYPE html>
<html>
    <head>
        <title>Les recettes de BOB</title>
        <link rel="stylesheet" type="text/css" href="css-recettes.css"> <!-- Lien vers le fichier CSS -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="index.php">À propos de Bob</a></li>
            <li><a href="index.php">Mes recettes</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
        <header>

        <section id="recettes">
            <h1>Les recettes de BOB</h1>
        </header>
        <section id="recette-presentation">
        <ul class="recette-list">
            <?php
                    echo '<a href="film.php?id=' . $recette['id'] . '">';
                    echo '<img src = "data:image/png;base64, ' . base64_encode($recette['photo']) . '" />';
                    echo '</a>';

                    echo '<div class="film-info-box">';
                    echo '<a href="film.php?id=' . $recette['id'] . '">';
                    echo '<h3>' . $recette['nom'] . '</h3>';
                    echo '</a>';

                    echo '<p class="film-info">Temps de préparation en min : ' . $recette['temps'] . '</p>';
                    echo '<p class="film-info">Difficulté : ' . $recette['difficulte'] . '</p>';
                    echo '<p class="film-info">Liste des ingrédients : ' . $recette['liste_ingredient'] . '</p>';
                    echo '</div>';
                    echo '</li>';
            ?> 
        </ul>   

        </section>
        <footer>
            <p>2023 Les recettes de BOB. Tous droits réservés.</p>
        </footer>
    </body>
</html>




