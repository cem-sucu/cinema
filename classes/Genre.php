<?php

class Genre{
    private string $genre;
    private array $films;

    public function __construct(string $genre){
        $this->genre=$genre;	
        $this->films=[];
    }
    

//getter et setter de genre
    public function getGenre():string{
        return $this->genre;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }

    // methode toString
    public function __toString() {
        return "Genre : " . $this->getGenre();
    }

    // methode ajouter film
    public function addFilm(Film $film) {
        $this->films[] = $film;
    }
    

    // Méthode pour afficher les films par genre
    public function afficherFilms() {
        $result = "<h3>Films du genre " . $this->genre . "</h3>";
        foreach ($this->films as $film) {
             $result .= $film . "<br>";
        }
        return $result;
    }

}



?>