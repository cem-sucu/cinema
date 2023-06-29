<?php

class Genre{
    private string $genre;
    private Realisateur $realisateur;

    public function __construct(string $genre, Realisateur $realisateur){
        $this->genre=$genre;
        $this->realisateur=$realisateur;	
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

    // Méthode pour afficher les films par genre
    public function afficherFilmsParGenre(array $films) {
        echo "<h3>Films du genre " . $this->getGenre() . "</h3>";
        foreach ($films as $film) {
            if ($film->getGenre() === $this) {
                echo $film . "<br>";
            }
        }
    }

}



?>