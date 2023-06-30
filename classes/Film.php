<?php

class Film{

    private string $titre;
    private int $duree;
    private string $resume;
    private DateTime $dateSortie;
    private Genre $genre;
    private Realisateur $realisateur;
    private array $castings;


    public function __construct(string $titre, int $duree, string $resume, string $dateSortie, Genre $genre, Realisateur $realisateur) {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->dateSortie = new DateTime($dateSortie);
        $this->genre = $genre;
        $this->realisateur = $realisateur;
        // Ajouter le film à la liste des films du genre
        $this->genre->addFilm($this);
        //jouter le film à la liste des films du réalisateur
        $this->realisateur->ajouterFilm($this);
        $this->castings = array();
    }
    
    // la methode ajoutee acteurs
    public function ajouterCasting(Jouer $casting) {
        $this->castings[] = $casting;
    }

    // la methode afficher le castinbg
    public function afficherCasting(): string {
        $result = "<h3>Casting du film : " . $this->getTitre() . "</h3>";
        foreach ($this->castings as $casting) {
            $acteur = $casting->getActeur();
            $role = $casting->getRole();
            $result .= $acteur->getNom() . " " . $acteur->getPrenom() . " (" . $role->getNom() . "), ";
        }
        return $result;
    }

    

//getter et setter titre
    public function getTitre():string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

// getter et setter duree
    public function getDuree():int
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

//getter et setter resume
    public function getResume():string
    {
        return $this->resume;
    }

    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

// getter et setter dateSortie
    public function getDateSortie():DateTime
    {
        return $this->dateSortie;
    }
 
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = new DateTime($dateSortie);

        return $this;
    }

//getter et setter pour Genre 
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

//getter et setter realisateur
    public function getRealisateur():Realisateur
    {
        return $this->realisateur;
    } 
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }
// methode tostring
    public function __toString()
    {
        return "<strong> Le film </strong>: ".$this->getTitre() ." d'une duréé de " .$this->getDuree() ." minutes, sorti le " .$this->getDateSortie()->format("d-m-Y") .".<br>" . " Son resumé : " .$this->getResume();
    }



}



?>