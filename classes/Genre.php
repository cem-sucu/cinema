<?php

class Genre{
    private string $nom;
    private array $films;

    public function __construct(string $nom){
        $this->nom=$nom;	
        $this->films=[];
    }
    

//getter et setter de nom
    public function getNom():string{
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    // methode toString
    public function __toString() {
        return "nom : " . $this->getNom();
    }

    // methode ajouter film
    public function addFilm(Film $film) {
        $this->films[] = $film;
    }
    

    // Méthode pour afficher les films par genre
    public function afficherFilms() {
        $result = "<h3>Films du nom " . $this->nom . "</h3>";
        foreach ($this->films as $film) {
             $result .= $film . "<br>";
        }
        return $result;
    }

}



?>