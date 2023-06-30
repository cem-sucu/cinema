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
}



?>