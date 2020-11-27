<?php

    // pour savoir en cas de bug (debug), afin de vérifier que tout fonctionne comme console.log
    // var_dump($_GET);


    // Structure de routage : définir la page qui sera inclue, en fonction de la valeur $_GET;["page] (choix de l'utilisateur)
    // Si $_GET["page] est défini :
    if(isset($_GET["page"])) {

        $tabArticle = $_GET["page"].".php";

        switch($_GET["page"]) {
            case "page1" : $tabArticle = "accueil.php";
            break;
            case "page2" : $tabArticle = "page1.php";
            break;
            case "page3" : $tabArticle = "page2.php";
            break;
            case "page4" : $tabArticle = "page3.php";
            break;
            case "vuearticle" : $tabArticle = "vuearticle.php";
            break;
            default : $tabArticle = "accueil.php";              /* solution par défaut en cas d'un choix non prévu */
        }

    }else {

        $tabArticle = "accueil.php";

    }


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
                    <li class="row"><a href="index.php?page=page1">Accueil</a></li>
                    <li class="row"><a href="index.php?page=page2">Epitech</a></li>
                    <li class="row"><a href="index.php?page=page3">Futura</a></li>
                    <li class="row"><a href="index.php?page=page4">Le futur du Web Mobile</a></li>
                </ul>
                        
            </div>
           
            <?php require $tabArticle ?>

            
            
    
</body>
</html>
