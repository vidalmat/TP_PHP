<?php

// enregistrer les variables en mettant tout en détail, ne pas oublier!!!

$article1 = [ "titre" => "Titre de l'article", 
"Description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis
iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.",
 "auteur" => "moi-même"];

 $article2 = [ "titre" => "Titre de l'article", 
"Description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis
iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.",
 "auteur" => "moi-même"];

 $article3 = [ "titre" => "Titre de l'article", 
"Description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nostrum sit, suscipit adipisci, quibusdam explicabo earum saepe aperiam, ducimus necessitatibus facilis
iusto consequatur soluta aspernatur error asperiores. Accusamus, laboriosam voluptatibus.",
 "auteur" => "moi-même"];


$articles = [$article1, $article2, $article3];
// echo substr($articles, 0, 30) . "...";

var_dump($articles);

// Résultat :
// Kryzalid Communication lance so...

for($i = 0; $i < count($articles); ++$i){
    $articles[$i]["Description"] = substr($articles, 0, 30);
}

    echo($articles);

?>