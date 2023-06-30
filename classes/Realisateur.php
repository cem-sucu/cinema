<?php

class Realisateur extends Personne {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;
    private array $filmographie;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->filmographie = array();
    }
    

    // methoode ajoute casting
    public function ajouterCasting(Jouer $casting) {
        $this->filmographie[] = $casting;
    }

    // Getter et setter pour nom
    public function getNom(): string {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Getter et setter pour prenom
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    // Getter et setter pour sexe
    public function getSexe(): string {
        return $this->sexe;
    }
    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    // Getter et setter pour dateNaissance
    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }
 
    public function getFilmographie()
    {
        return $this->filmographie;
    }
    // Méthode tout string
    public function __toString() {
        return "Le réalisateur : " . $this->getNom() . " " . $this->getPrenom() . " (" . $this->getSexe() . ")" . " né le " . $this->getDateNaissance()->format("d-m-Y");
    }

    // Méthode pour ajouter un film à la filmographie
    public function ajouterFilm($film) {
        $this->filmographie[] = $film;
    }

    // Méthode pour afficher les films du réalisateur
    public function afficherFilms(): string {
        $result = "<h3>Films du réalisateur " . $this->getPrenom() . " " . $this->getNom() . "</h3>";
    foreach ($this->filmographie as $film) {
        $result .= $film->getTitre() . "<br>";
    }
    return $result;
}


    // Méthode pour afficher la filmographie
    public function afficherFilmographie():string {
        $filmographie = "Filmographie de " . $this->getNom() . " : ";
        foreach ($this->filmographie as $film) {
            $filmographie .= $film->getTitre();
        }
        return $filmographie;
    }

    
}

?>
