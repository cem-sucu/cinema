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
}



?>