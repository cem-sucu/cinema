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

 
    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function getSexe()
    {
        return $this->sexe;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }


}

?>