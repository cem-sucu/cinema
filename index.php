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
$acteur1 = new Acteur("Johnny Depp");
$acteur2 = new Acteur("Leonardo DiCaprio");
$acteur3 = new Acteur("Portamn Nathalie");

// role 
$role1 = new Role("Cobb");
$role2 = new Role("Teddy");
$role3 = new Role("Jack Dawson");
$role4 = new Role("Padmé Amidala");


// Création objet Jouer
$jouer1 = new Jouer($acteur1, $film1, $role1);
$jouer2 = new Jouer($acteur1, $film2, $role2);
$jouer3 = new Jouer($acteur2, $film2, $role2);
$jouer6 = new Jouer($acteur2, $film2, $role2);
$jouer4 = new Jouer($acteur2, $film3, $role3);
$jouer5 = new Jouer($acteur3, $film1, $role4);

// Affichage de la filmographie des acteurs
echo $acteur1->getFilmographie();
echo $acteur2->getFilmographie();
echo $acteur3->getFilmographie();

// Affichage de la filmographie des réalisateurs
echo $realisateur1->getFilmographie();
echo $realisateur2->getFilmographie();

//affichage des roles
echo $jouer1->afficherRole();
echo $jouer2->afficherRole();
echo $jouer3->afficherRole();
echo $jouer4->afficherRole();
echo $jouer5->afficherRole();
echo $jouer6->afficherRole();

?>