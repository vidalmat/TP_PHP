<?php


    require_once "articles.php";

    

    $html = "";


    // $html .= "<h3>" . $articles[0]["titre"] . "</h3>";



    $html .= "<h3>" . $articles[0]["titre"] . "</h3>";
    $html .= "<p class=\"paragraphe\">" . substr($articles[0]["Description"], 0, 20) . "..." . "</p>" . "<a href=\"index.php?page=page1\">Lire la suite</a>";

    // foreach($articles[i] as $article) {

    //      $html .= "<h3>" . $article["titre"] . "</h3>";
    //      $html .= "<p class=\"paragraphe\">" . $article["Description"] . "</p>";

    // }

?>


<article>
    
<div class="conteneur">

    <div id="epitech">

        <h2>Epitech, le futur de l'informatique</h2>

        <img src="images/Epitech.jpg" alt="">

        <div class="bouton">
            <p><a href="https://www.epitech.eu/fr/">Lire l'article</a></p>
        </div>
    
    </div>

</div>

<?= $html?>


<!-- <h3>Titre de mon article</h3>

<p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis
     iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.</p>
    
</article> -->