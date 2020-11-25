<?php

    $article1 = ["nom" => "Epitech", "article" => "Ecole en informatique"];
    $article2 = ["nom" => "Futura", "article" => "Les 10 technologies de 2020"];
    $article3 = ["nom" => "Pwa", "article" => "Le futur du Web Mobile"];
    $tabarticle = ["article1", "article2", "article3"];

    var_dump($article2);
    

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP PHP</title>
</head>
<body>

        <header>

        <h1>Innovations de l'univers du Dev Web</h1>

            <img src="images/img_header2.png" alt="image header" id="img_header">


        </header>

        <section>


            <div id="scroll_vers_le_haut">   <!-- div pour faire une flèche qui scrolle vers le haut -->
                <a href="#top"><img src="images/fleche_haut2.png" alt="Retourner en haut" /></a>
            </div>                                      <!---->

            <p>Parmi tous ces articles réunissant toutes les innovations récentes, faites votre choix :</p>

            <div class="li_haut">
                <ul>
                    <li><a href="https://www.epitech.eu/fr/">Epitech, le futur de l'informatique</a></li>
                    <li><a href="https://www.futura-sciences.com/sciences/actualites/magazine-science-10-technologies-2020-vont-changer-monde-6166/">Futura, les dix technologies de 2020 qui vont changer le monde</a></li>
                    <li><a href="https://blog.arca-computing.fr/pwa-le-futur-du-web-mobile/">Le futur du Web Mobile</a></li>
                </ul>
                        
            </div>
            <span></span>

            <div class="conteneur">

                <div id="epitech">

                    <h2>Epitech, le futur de l'informatique</h2>

                    <img src="images/Epitech.jpg" alt="">

                    <div class="bouton">
                        <p><a href="https://www.epitech.eu/fr/">Lire l'article</a></p>
                    </div>
                
                </div>



                <div id="futura">

                    <h2>Futura, les dix technologies de 2020 qui vont changer le monde</h2>

                    <img src="images/futura.jpg" alt="">

                    <div class="bouton">
                        <p><a href="https://www.futura-sciences.com/sciences/actualites/magazine-science-10-technologies-2020-vont-changer-monde-6166/">Lire l'article</a></p>
                    </div>

                </div>



                <div id="pwa">

                    <h2>Le futur du Web Mobile</h2>

                    <img src="images/pwa.png" alt="">

                    <div class="bouton">
                        <p><a href="https://blog.arca-computing.fr/pwa-le-futur-du-web-mobile/">Lire l'article</a></p>
                    </div>

                    

                </div>

            </div>

        </section>



    
</body>
</html>