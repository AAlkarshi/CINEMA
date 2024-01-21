<?php

class Realisateur extends Personne{
    private array $tableauFilmoRealisateur; 

    public function __construct(string $NomPersonne,string $PrenomPersonne,
                                string $SexePersonne,string $DatedeNaissancePersonne) {
                          
        parent::__construct($NomPersonne,$PrenomPersonne,$SexePersonne,$DatedeNaissancePersonne); 
    }
    
     //AJOUTER FILM de la table REAL qui va les rajouter ds un tableau vide tableauCastingFilm
    public function ajouterFilm($Ajoutfilm){
        $this->tableauFilmoRealisateur[] = $Ajoutfilm;
    }
    
    //Lister la filmographie d'un Realisateur 
   public function ListesFilmographieRealisateur() {
     echo "Le réalisateur"." ".$this->getNomPersonne()." ".$this->getPrenomPersonne(). "à réalisé";
        foreach ($this->tableauFilmoRealisateur as $filmRealisateur) { 
           echo $filmRealisateur->gettitre()."<br>";   
        }
   }
   
   
}

?>