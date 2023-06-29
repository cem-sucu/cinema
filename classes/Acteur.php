<?php 

class Acteur {
    private $nom;
    private $filmographie;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->filmographie = array();
    }

    public function ajouterFilm($film) {
        $this->filmographie[] = $film;
    }

    public function getFilmographie() {
        $filmographie = "Filmographie de ".$this->nom.":\n";
        foreach ($this->filmographie as $film) {
            $filmographie .= $film->getTitre();
        }
        return $filmographie;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

?>