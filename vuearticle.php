<?php


    require "articles.php";



    $article = $articles[1];




?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vue Article</title>
</head>
    <body>

        <p class="fildar"><a href="index.php?page=page1">Accueil</a> / Les technologies de 2020 qui vont changer le monde</p><!-- fil d'ariane -->

        <article>

        <div id="futura">

            <h2>Futura, les dix technologies de 2020 qui vont changer le monde</h2>

            <img src=<?= $article["image"]; ?>>

            <div class="bouton">
                <p><a href="https://www.futura-sciences.com/sciences/actualites/magazine-science-10-technologies-2020-vont-changer-monde-6166/">Lire l'article</a></p>
            </div>

        </div>

        <span></span>

        <h3><?= $article["titre"]; ?></h3>

        <h4>L’Internet quantique sécurisé</h4>

            <p class="paragraphe"><?= $article["Description"]; ?></p>

        <h4>La médecine hyper-personnalisée</h4>

            <p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis <br>
            iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p>

        <h4>La monnaie virtuelle</h4>

            <p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis <br>
            iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p>

        <h4>Les médicaments anti-âge</h4>

            <p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis <br>
            iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p>

        <h4>L’intelligence artificielle pour trouver des nouvelles molécules</h4>

            <p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis <br>
            iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p>

        

        </article>
    
    </body>
</html>