<?php 

class Acteur extends Personne {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private string $dateNaissance;
    private array $filmographie;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;
        $this->filmographie = array();

    }

    // methode ajoute casting
    public function ajouterCasting(Jouer $casting) {
        $this->filmographie[] = ["film" => $casting->getFilm(), "role" => $casting->getRole()];
    }
    
    

    public function ajouterFilm(Film $film, Role $role) {
        $this->filmographie[] = ["film" => $film, "role" => $role];
    }

    public function getFilmographie() {
        $filmographieStr = '';
        foreach ($this->filmographie as $item) {
            $film = $item["film"];
            $role = $item["role"];
            $filmographieStr .= $film->getTitre() . " (" . $role->getNom() . "), ";
        }
        return $filmographieStr;
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

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }


    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }


}

?>