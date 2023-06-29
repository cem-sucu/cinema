<?php 

class Jouer {
    private $acteur;
    private $film;
    private $role;

    public function __construct($acteur, $film, $role) {
        $this->acteur = $acteur;
        $this->film = $film;
        $this->role = $role;

        $acteur->ajouterFilm($film);
        $realisateur = $film->getRealisateur();
        $realisateur->ajouterFilm($film);
    }
}


?>