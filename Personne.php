<?php

class Personne {
    private string $NomPersonne;
    private string $PrenomPersonne;
    private string $SexePersonne;
    private DateTime $DatedeNaissancePersonne;
   
    public function __construct(string $NomPersonne,string $PrenomPersonne,
                                string $SexePersonne,string $DatedeNaissancePersonne) {
            $this->NomPersonne = $NomPersonne;
            $this->PrenomPersonne = $PrenomPersonne;
            $this->SexePersonne = $SexePersonne;
            $this->DatedeNaissancePersonne = new DateTime($DatedeNaissancePersonne);
    }

    public function getNomPersonne(): string {
        return $this->NomPersonne;
    }
    public function getPrenomPersonne(): string {
        return $this->PrenomPersonne;
    }
    public function getSexePersonne(): string {
        return $this->SexePersonne;
    }
    public function getDatedeNaissancePersonne(): DateTime {
        return $this->DatedeNaissancePersonne;
    }

    public function setNomPersonne($NomPersonne) {
        $this->NomPersonne = $NomPersonne;
    }
    public function setPrenomPersonne($PrenomPersonne) {
        $this->PrenomPersonne = $PrenomPersonne;
    }
    public function setSexePersonne($SexePersonne) {
        $this->SexePersonne = $SexePersonne;
    }
    public function setDatedeNaissancePersonne($DatedeNaissancePersonne) {
        $this->DatedeNaissancePersonne = $DatedeNaissancePersonne;
    }
   

      
    public function __toString()
    {
        return $this->PrenomPersonne." ".$this->NomPersonne;
    }
        
    
    
}



?>