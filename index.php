<?php
spl_autoload_register(function ($class_name) {
    require $class_name .'.php';
});

//ACTEUR
$BaleChristian = new Acteur("Bale","Christian","Masculin","1974-01-30",[],[]);
$KilmerVal = new Acteur("Kilmer","Val","Masculin", "1959/12/31",[],[]);
$RadcliffDaniel = new Acteur("Radcliff","Daniel","Masculin","1989/07/23",[],[]);
$CillianMurphy = new Acteur("Murphy","Cillian","Masculin","1976/05/25",[],[]);

//ROLE
$roleBatman = new Role("Batman");
$roleOppenheimer = new Role("Robert Oppenheimer");
$roleHP = new Role("Harry Potter");

//REALISATEUR
$NolanChristopher = new Realisateur("Nolan","Christopher","Homme","1970-07-30",[]);
$JoelSchumacher = new Realisateur("Schumacher","Joel","Homme", "1939-09-29",[]);
$MikeNewell = new Realisateur("Newell","Mike","Homme","1942-03-28",[]);
$AdamMcKay = new Realisateur("McKay","Adam","Homme", "1968-04-17",[]);

//GENREFILM
$SF = new GenreFilm("Science-Fiction", []);
$Action = new GenreFilm("Action", []);
$Biopic = new GenreFilm("Biopic", []);

// FILM
$BatmanForever = new Film ("Batman Forever","1995/07/19",122,$JoelSchumacher,$Action,"Double-face et l'Homme-Mystère,mettent en péril Gotham City en manipulant les pensées des gens",[]);
$LeChevalierNoir = new Film("Le Chevalier Noir","2012/07/25", 165, $NolanChristopher, $Action,"Batman a disparu dans la nuit : lui qui était un héros est alors devenu un fugitif.", []);
$HarryPotteretCoupedeFeu = new Film("HarryPotteretCoupedeFeu","2000/11/29",157,$MikeNewell,$SF,"La quatrième année à l'école de Poudlard est marquée par le Tournoi des trois sorciers.", []);
$BigShort = new Film("BigShort","2012/07/25",130, $AdamMcKay, $Biopic, "Profitant de l'aveuglement généralisé des grosses banques, quatre outsiders anticipent la bulle financière et mettent au point le casse du siècle !.", []);
$Oppenheimer = new Film("Oppenheimer", "2023/07/19",180,$NolanChristopher, $Biopic,"le lieutenant-général Leslie Groves Jr.nomme le physicien J. Robert Oppenheimer pour travailler sur le projet ultra-secret Manhattan.", []);

$PersonneBatman = new Jouer ($BaleChristian,$roleBatman,$BatmanForever);
$PersonneOppenheimer = new Jouer ($CillianMurphy,$roleOppenheimer,$Oppenheimer);
$PersonneHP = new Jouer ($RadcliffDaniel,$roleHP,$HarryPotteretCoupedeFeu);

echo $Action->ListesFilmGenre();
echo "</br>";

echo $RadcliffDaniel->filmographieActeur();
echo "</br>";

echo $JoelSchumacher->ListesFilmographieRealisateur();
echo "</br>";

echo $roleHP->ListesActeursetRoleFilm();
echo "</br>";

echo $Oppenheimer->ListesCastingFilm();




?>