<?php

class Film {
    private string $titre;
    private DateTime $DatedeSortie;
    private int $DureeMinute;
    private Realisateur $Realisateur;
    private GenreFilm $genreFilm;
    private string $Resume;
    private array $tableauCastingFilm;
    
   public function __construct(string $titre,string $DatedeSortie,int $DureeMinute,
   	Realisateur $Realisateur,GenreFilm $genreFilm,string $Resume) {
        $this->titre = $titre;
        $this->DatedeSortie = new DateTime($DatedeSortie);
        $this->DureeMinute = $DureeMinute;
        $this->Realisateur = $Realisateur;
        $this->genreFilm = $genreFilm;
        $this->Resume = $Resume;
        $this->tableauCastingFilm = [];        
        $this->Realisateur->ajouterFilm($this);
        $this->genreFilm->ajouterGenreFilm($this);
    }

    public function gettitre(): string {
        return $this->titre;
    }
    public function getDatedeSortie(): DateTime {
        return $this->DatedeSortie;
    }
     public function getDureeMinute(): int {
        return $this->DureeMinute;
    }
      public function getRealisateur(): Realisateur {
        return $this->Realisateur;
    }
    public function getgenreFilm(): GenreFilm {
        return $this->genreFilm;
    }
    public function getResume(): string {
        return $this->Resume;
    }

    public function settitre($titre) {
        $this->titre = $titre;
    }
    public function setDatedeSortie($DatedeSortie) {
        $this->DatedeSortie = $DatedeSortie;
    }
    public function setDureeMinute($DureeMinute) {
        $this->DureeMinute = $DureeMinute;
    }
    public function setRealisateur($Realisateur) {
        $this->Realisateur = $Realisateur;
    }
    public function setgenreFilm($genreFilm) {
        $this->genreFilm = $genreFilm;
    }
    public function setResume($Resume) {
        $this->Resume = $Resume;
    }

     public function ajouterFilmCasting($AjoutfilmCasting){
        $this->tableauCastingFilm[] = $AjoutfilmCasting;
    }

    public function __toString() {
        return $this->titre;
    }

    public function ListesCastingFilm() { 
        foreach ($this->tableauCastingFilm as $casting) { 
            echo "Dans le film ". " " . $this->gettitre()." ".
            $casting->getActeur()." "."qui joue le rôle de ".
            $casting->getRole(); 
        } 
    }
   

}

?>









