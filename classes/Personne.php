
<?php 
class Personne {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    // ... Add getters and setters for common attributes

    public function __toString() {
        return $this->prenom . " " . $this->nom . " (" . $this->sexe . ")" . " né le " . $this->dateNaissance->format("d-m-Y");
    }
    
}

?>