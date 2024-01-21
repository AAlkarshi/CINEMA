<?php

class Acteur extends Personne {
    private array $tableauCastingFilm;

    public function __construct(string $NomPersonne,string $PrenomPersonne,
    							string $SexePersonne,string $DatedeNaissancePersonne){     
        
            parent::__construct($NomPersonne,$PrenomPersonne,$SexePersonne,$DatedeNaissancePersonne);
            $this->tableauCastingFilm = [];          
      }

       //AJOUT DE FILM DANS UN TABLEAU
    public function ajouterFilm($AjoutfilmCasting){
        $this->tableauCastingFilm[] = $AjoutfilmCasting;
    }

    // Lister les acteurs Ayant jouer un role precis 4
	public function filmographieActeur() {
        echo "Cet acteur ".$this->getNomPersonne()." ".$this->getPrenomPersonne()." à joué dans les films suivants :";
    	foreach ($this->tableauCastingFilm as $jouer) {
            echo $jouer->getFilm()." (".$jouer->getRole().")<br>";
   		}
    }


   

    








}


   
   






?>