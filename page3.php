<?php


require_once "articles.php";

$html = "";


// $html .= "<h3>" . $articles[0]["titre"] . "</h3>";



$html .= "<h3>" . $articles[2]["titre"] . "</h3>";
$html .= "<p class=\"paragraphe\">" . substr($articles[2]["Description"], 0, 20) . "..." . "</p>";


?>


<article>

<div id="pwa">

    <h2>Le futur du Web Mobile</h2>

    <img src="images/pwa.png" alt="">

    <div class="bouton">
        <p><a href="https://blog.arca-computing.fr/pwa-le-futur-du-web-mobile/">Lire l'article</a></p>
    </div>

</div>

<?= $html?>

<!-- <h3>Titre de mon article</h3>

<p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis <br>
     iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p> -->

</article>