<?php

class Realisateur{

    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;


    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> sexe = $sexe;
        $this-> dateNaissance = new DateTime($dateNaissance);
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
      public function afficherFilmsParRealisateur(array $films) {
        echo "<h3>Films du réalisateur " . $this . "</h3>";
        foreach ($films as $film) {
            if ($film->getRealisateur() === $this) {
                echo $film . "<br>";
            }
        }
    }

  
}





?>