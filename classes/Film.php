<?php

class Film{

    private string $titre;
    private int $duree;
    private string $resume;
    private DateTime $dateSortie;

    public function __construct(string $titre, int $duree, string $resume, string $dateSortie) {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->dateSortie = new DateTime($dateSortie);
    }
    

//getter et setter titre
    public function getTitre():string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
// getter et setter duree
    public function getDuree():int
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }
//getter et setter resume
    public function getResume():string
    {
        return $this->resume;
    }

    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }
// getter et setter dateSortie
    public function getDateSortie():DateTime
    {
        return $this->dateSortie;
    }
 
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = new DateTime($dateSortie);

        return $this;
    }

    public function __toString()
    {
        return " Le film : ".$this->getTitre() ." d'une duréé de " .$this->getDuree() ." minutes, sorti le " .$this->getDateSortie()->format("d-m-Y") .".<br>" . " Son resumé : " .$this->getResume();
    }

}



?>