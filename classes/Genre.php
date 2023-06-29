<?php

class Genre{
    private string $genre;
    private Realisateur $realisateur;
    protected array $films;

    public function __construct(string $genre, Realisateur $realisateur){
        $this->genre=$genre;
        $this->realisateur=$realisateur;	
        $this->films=[];
    }
    

//getter et setter de genre
    public function getGenre():string{
        return $this->genre;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
// getter et setter de Realisateur
    public function getRealisateur(): Realisateur {
        return $this->realisateur;
    }

    public function setRealisateur(Realisateur $realisateur) {
        $this->realisateur = $realisateur;
    }

    public function __toString() {
        return "Genre : " . $this->getGenre() . ", Réalisateur : " . $this->getRealisateur();
    }

    public function addFilm(Film $film){
        $this->films[] =$film;
    }

    // Méthode pour afficher les films par genre
    public function afficherFilms() {
        echo "<h3>Films du genre " . $this->genre . "</h3>";
        foreach ($this->films as $film) {
            echo $film . "<br>";
        }
    }

}



?>