<?php 

class Jouer {
    private Acteur $acteur;
    private Film $film;
    private Role $role;

    public function __construct(Acteur $acteur,Film $film,Role $role) {
        $this->acteur = $acteur;
        $this->film = $film;
        $this->role = $role;

        $acteur->ajouterFilm($film, $role);
        $acteur->ajouterCasting($this);
        $film->ajouterCasting($this);
        $role->ajouterCasting($this);
    }

    public function afficherRole()
{
    echo "Film: " . $this->film->getTitre() . "<br>";
    echo "Rôle : " . $this->role->getNom() . "<br>";
    echo "Acteur : " . $this->acteur->getNom() . "<br>";
}


   

    /**
     * Get the value of acteur
     */ 
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set the value of acteur
     *
     * @return  self
     */ 
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get the value of film
     */ 
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}


?>