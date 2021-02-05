<?php


class Livre {

    private $titre;
    private $auteur;
    private $resume;
    private $categorie;

    function __construct(string $titre, string $auteur, string $resume, string $categorie){

        $this->titre = $titre; 
        $this->auteur = $auteur;
        $this->resume = $auteur;
        $this->categorie = $categorie;
        
    }


    function saveBook(){

        $contenu = (file_exists("datas/livres.json"))? file_get_contents("datas/livres.json") : "";

        $livres = json_decode($contenu);

        $livres = (is_array($livres))? $livres : [];

        $livre = (get_object_vars($this));

        array_push($livres, $livre);

        $handle = fopen("datas/livres.json", "w");

        $json = json_decode($livres);

        fwrite($handle, $json);

        fclose($handle);

    }

    static function getlivres(): array{

        $contenu = (file_exists("datas/livres.json"))? file_get_contents("datas/livres.json") : "";

        $livres = json_decode($contenu);

        $livres = (is_array($livres))? $livres : [];

        return $livres;

    }
}

?>