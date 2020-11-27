<?php


require_once "articles.php";


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

            <h1>Welcome sur notre site</h1>

                <img src="images/accueil.jpg" alt="image header" id="img_header">


        </header>

        <section>


            <div id="scroll_vers_le_haut">   <!-- div pour faire une flèche qui scrolle vers le haut -->
                <a href="#top"><img src="images/fleche_haut2.png" alt="Retourner en haut" /></a>
            </div>                                      <!---->

            <p>Parmi tous ces articles réunissant toutes les innovations récentes, faites votre choix :</p>

            <div class="li_haut">
                <ul>
                    <li><a href="index.php?page=page2">Epitech</a></li>
                    <li><a href="index.php?page=page3">Futura</a></li>
                    <li><a href="index.php?page=page4">Le futur du Web Mobile</a></li>
                </ul>
                        
            </div>




    
</body>
</html>