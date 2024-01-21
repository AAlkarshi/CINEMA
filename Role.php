<?php

class Role{
    private string $role;
    private array $tableauCastingFilm;
    
    public function __construct(string $role){     
        $this->role = $role; 
        $this->tableauCastingFilm = []; 
    }

    public function getRole() : string {
        return $this->role;
    }
    public function setRole(string $role) {
        $this->role = $role;
    } 
    
     public function __toString(){
        return $this->role;
    }
    
    public function ajouterFilmRoleprCasting($AjoutfilmCasting){
        $this->tableauCastingFilm[] = $AjoutfilmCasting;
    }

	public function ListesActeursetRoleFilm() {
        echo "Les acteurs ayant joué le rôle de ".$this->getRole()." ". " :";
        foreach ($this->tableauCastingFilm as $jouer) {
            echo $jouer->getActeur();
   		}
    }

  


   

}


?>