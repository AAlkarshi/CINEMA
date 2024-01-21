<?php

class Jouer{
    private Acteur $acteur;
    private Role $role;
    private Film $film;

    public function __construct(Acteur $acteur, Role $role, Film $film){     
        $this->acteur = $acteur;
        $this->role = $role;
        $this->film = $film; 

        $this->film->ajouterFilmCasting($this);
        $this->acteur->ajouterFilm($this);
        $this->role->ajouterFilmRoleprCasting($this);
    }
   
    public function getActeur() : Acteur {
        return $this->acteur;
    }
    public function getRole() : Role {
        return $this->role;
    }
    public function getFilm() : Film {
        return $this->film;
    }

    public function setActeur(Acteur $acteur) {
        $this->acteur = $acteur;
    } 
    public function setRole(Role $role) {
        $this->role = $role;
    } 
    public function setFilm(Film $film) {
        $this->film = $film;
    } 

     public function __toString(){
        return $this->acteur." ".$this->role;
    }

}


?>