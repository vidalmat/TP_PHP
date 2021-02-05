<?php

class Livre {

    private $titre;
    private $resume;
    private $auteur;
    private $categorie;

    function __construct(string $titre, string $resume, string $auteur, string $categorie) {
        $this->titre = $titre;
        $this->resume = $resume;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
    }


    // Construction des getters
    public function getTitre(): ?string {
        return $this->titre;
    }

    public function getResume(): ?string {
            return $this->resume;
    }

    public function getAuteur(): ?string {
        return $this->auteur;
    }

    public function getCategorie(): ?string {
        return $this->categorie;
    }

    /* Fin des getters */


    // Construction des setters
    public function setTitre(string $titre) {
        $this->titre = $titre;
    }

    public function setResume(string $resume) {
        $this->resume = $resume;
    }

    public function setAuteur(string $auteur) {
        $this->auteur = $auteur;
    }

    public function setCategorie(string $categorie) {
        $this->categorie = $categorie;
    }
    
    /* Fin des setters */


    function saveBook() {

        //echo "Je récupère le contenu de mon fichier livres.json :<br>";
        $contenu = (file_exists("datas/livres.json"))? file_get_contents("datas/livres.json") : "";
        //var_dump($contenu);

        //echo "Je décode mon JSON en structure PHP (tableau associatif) :<br>";
        $livres = json_decode($contenu);
        //var_dump($livres);
   
        $livres = (is_array($livres))? $livres : [];

        //echo "Je crée un tableau avec mon nouvel objet courant car les $this ne peut pas être encoder après un json-encode: <br>";
        $livre = get_object_vars($this);
        //var_dump($livre);

        //echo "J'ajoute ce livre à mon tableau de livres (\$livres)";
        array_push($livres, $livre);
        //var_dump($livres);

        //echo "J'ouvre mon fichier livres.json <br>";
        $handle = fopen("datas/livres.json", "w");

        //echo "Je réencode mon tableau au format JSON : <br>";
        $json = json_encode($livres);
        //var_dump($json);

        //echo "J'écris ma chaîne JSON dans mon fichier livres.json<br>";
        fwrite($handle, $json);
        //echo "Je ferme mon fichier !";
        fclose($handle);
    }

    static function getLivres(): array {

        //echo "Je récupère le contenu de mon fichier livres.json :<br>";
        $contenu = (file_exists("datas/livres.json"))? file_get_contents("datas/livres.json") : "";
        //var_dump($contenu);

        //echo "Je décode mon JSON en structure PHP (tableau associatif) :<br>";
        $livres = json_decode($contenu);
        //var_dump($livres);

        $livres = (is_array($livres))? $livres : [];

        return $livres;
    }
}