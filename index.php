<h1>exercice CINEMA</h1>

<p style="font-size: 20px;"><strong style="color: blue;">Lister la liste des acteurs ayant incarné un rôle précis </strong>(ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, ...)<br><strong style="color: blue;">Lister  le  casting  d'un  film  </strong> (dans  le  film  Star  Wars  Episode  IV,  Han  Solo  a  été  incarné  par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br><strong style="color: blue;">Lister  les  films  par  genre   </strong>(exemple  :  le  genre  SF  est  associé  à  X  films  :  Star  Wars,  Blade Runner, ...)<br><strong style="color: blue;">Lister la filmographie d'un acteur  </strong>(dans quels films a-t-il joué ?)<br><strong style="color: blue;">Lister la filmographie d'un réalisateur  </strong>(quels sont les films qu'a réalisé ce réalisateur ?)</p>

<h2>Résultat</h2>



<?php
spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

// realisateur
$realisateur1 = new Realisateur("Reeves", "Matt", "H", "1966-04-27" );
$realisateur2 = new Realisateur("J. J. ", " Abraham ", " H ", "1938-04-08");
echo $realisateur1 ."<br>";
echo $realisateur2 ."<br>";

// genre
$genre1 = new Genre("Action", $realisateur2);
$genre2 = new Genre("Fantastique",$realisateur1);
echo $genre1 ."<br>";
echo $genre2 ."<br><br>";

// film
$film1 = new Film("Star Wars Episode IV", 121, "La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle.", "1977-03-03", $genre1, $realisateur1);
$film2 = new Film("Batman", 134, "Un super héros habillé en chauve-souris qui protège Gotham.", "1954-05-04", $genre2, $realisateur2);
$film3 = new Film("Spiderman 1", 221, "Super-héros homme-araignée qui attrape les méchants.", "1974-05-04", $genre2, $realisateur2);
$film4 = new Film("Pirate des Caraibes", 221, "Pirate qui vie des aventures", "1974-05-04", $genre2, $realisateur2);

//affiche les films
echo $film1."<br><br>";
echo $film2."<br><br>";
echo $film3."<br><br>";

// Afficher les films par genre
echo $genre1->afficherFilms();
echo $genre2->afficherFilms();

// Afficher les films d'un réalisateur
echo $realisateur1->afficherFilms();
echo $realisateur2->afficherFilms();

// actyeur
$acteur1 = new Acteur("Depp", "Johnny", "H", "1960-05-01");
$acteur2 = new Acteur("Di Caprio ", " Leonardo ", " H ", "1972-05-03");
$acteur3 = new Acteur("Portman ", " Nathalie ", " F ", "1965-05-03");
$acteur4 = new Acteur("Bale ", " Christian ", " H ", "1980-05-03");
$acteur5 = new Acteur("Maguuire ", " Tobey ", " H ", "1990-05-03");



// role 
$role1 = new Role("Cobb");
$role2 = new Role("Teddy");
$role3 = new Role("Jack Dawson");
$role4 = new Role("Padmé Amidala");
$role5 = new Role("Jack Sparrow");
$role6 = new Role("Batman");
$role7 = new Role("Bruce Wayne");
$role8 = new Role("Spiderman");
$role9 = new Role("Peter Parker");


// Création objet Jouer
$jouer3 = new Jouer($acteur4, $film2, $role2);
$jouer4 = new Jouer($acteur5, $film3, $role9);
$jouer5 = new Jouer($acteur3, $film1, $role4);
$jouer6 = new Jouer($acteur2, $film2, $role2);
$jouer7 = new Jouer($acteur1, $film4, $role5);
$jouer8 = new Jouer($acteur4, $film2, $role7);




// afficher tout la filmographie d'un acteur
echo $acteur1->afficherFilmographie();
echo $acteur2->afficherFilmographie();
echo $acteur3->afficherFilmographie();


//afficher les rôle des acteur dans un film
echo $film1->afficherCasting();
echo $film2->afficherCasting();
echo $film3->afficherCasting();




?>