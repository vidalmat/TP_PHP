<?php


require_once "articles.php";

$html = "";


// $html .= "<h3>" . $articles[0]["titre"] . "</h3>";



$html .= "<h3>" . $articles[1]["titre"] . "</h3>";
$html .= "<p class=\"paragraphe\">" . substr($articles[1]["Description"], 0, 20) . "..." . "</p>";


?>


<article>

<div id="futura">

    <h2>Futura, les dix technologies de 2020 qui vont changer le monde</h2>

    <img src="images/futura.jpg" alt="">

    <div class="bouton">
        <p><a href="https://www.futura-sciences.com/sciences/actualites/magazine-science-10-technologies-2020-vont-changer-monde-6166/">Lire l'article</a></p>
    </div>

</div>

<?= $html?>

<!-- <h3>Titre de mon article</h3>

<p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis <br>
     iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p> -->

</article>