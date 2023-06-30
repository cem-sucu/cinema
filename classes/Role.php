<?php 

class Role{
    private $nom;
    private array $castings;

    public function __construct(string $nom)
    {
        $this->nom=$nom;
    }


    // methode ajout casting
    public function ajouterCasting(Jouer $casting) {
        $this->castings[] = $casting;
    }

    function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    //methode pour afficher tout les acteurs
    public function afficherCasting()
    {
        $result = "<h3>Casting pour le rôle : " . $this->getNom() . "</h3>";
        foreach ($this->castings as $casting) {
            $acteur = $casting->getActeur();
            $film = $casting->getFilm();
        $result .= $acteur->getNom() . " " . $acteur->getPrenom() . " - " . $film->getTitre() . "<br>";
        }
        return $result;
    }
}



?>