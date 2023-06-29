<?php

class Realisateur{

    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;
    private array $films;


    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->films = [];
    }

// getter et setter pour nom
    public function getNom():string{
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

// getter et setter pour prenom
    public function getPrenom():string{
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
// getter et setter pour sex
    public function getSexe():string{
        return $this->sexe;
    }
    public function setSexe($sexe){
        $this->sexe = $sexe;
    }
// getter et setter pour dateNaissance

   public function getDateNaissance():DateTime{
    return $this->dateNaissance;
   }
   public function setDateNaissance($dateNaissance){
    $this->dateNaissance = $dateNaissance;
   }

// methode tout string
    public function __toString()
    {
        return "Le réalisateur : " .$this->getNom() ." " .$this->getPrenom() . " (".$this->getSexe().")" ." né le " .$this->getDateNaissance()->format("d-m-Y");
    }

// Méthode pour afficher les films par réalisateur
    public function addFilm(Film $film) {
        $this->films[] = $film;
        $film->getGenre()->addFilm($film);
    }
    

    public function afficherFilms() {
        $result = "<h3>Films du réalisateur " . $this->getPrenom() . " " . $this->getNom() . "</h3>";
        foreach ($this->films as $film) {
            $result .= $film . "<br>";
        }
        return $result;
    }
    

  
}





?>