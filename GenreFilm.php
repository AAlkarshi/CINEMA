<?php

class GenreFilm {
    private string $genrefilm;
    private array $tableauGenreFilm;

    public function __construct(string $genrefilm ) {
        $this->genrefilm = $genrefilm;
        $this->tableauGenreFilm = [];
    }

    public function getGenrefilm() : string {
       return $this->genrefilm;
    }
    public function gettableauGenreFilm(): array {
        return $this->tableauGenreFilm;
    }
    public function setGenreFilm(string $genrefilm) {
        $this->genrefilm = $genrefilm;
    }
    public function settableauGenreFilm(array $tableauGenreFilm) {
        $this->tableauGenreFilm = $tableauGenreFilm;
    }

    //FONCTION Ajouter qui permet de rempli le tableau ARRAY tableauGenreFilm 3
    public function ajouterGenreFilm($AjoutGenreFilm){
        $this->tableauGenreFilm[] = $AjoutGenreFilm;
    }


    
    public function ListesFilmGenre() {
        $resultat =  "Tout les films de ce genre sont des films :"." ".
        $this->genrefilm . " "."par exemple ";
            foreach ($this->tableauGenreFilm as $film) {
       $resultat .= $film->gettitre();
    }
    	return $resultat;
    }






}


?>

