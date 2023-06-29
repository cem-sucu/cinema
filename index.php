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

// genre
$genre1 = new Genre("Action", $realisateur2);
$genre2 = new Genre("Fantastique",$realisateur1);
echo $genre1 ."<br><br>";

// film
$film1 = new Film(" Star  Wars  Episode  IV ", 121, " La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire. ", "1977-03-03 ", $genre1, $realisateur1);

$film2 = new Film("Batman", 134, "Un super héro habillé en chauve souris qui, protège Gotham", "1954-05-04", $genre1,$realisateur2);

$film3 = new Film("Spiderman 1", 221, "super-héros homme araigné qui attrape les méchants", "1974-05-04", $genre2,$realisateur2);
echo $film1."<br><br>";
echo $film2."<br><br>";
echo $film3."<br><br>";



//creation objet pour afficher les film, realisateur et genre
$films =[$film1,$film2,$film3];

// Appel des méthodes d'affichage des films par genre et par réalisateur
$genre1->afficherFilmsParGenre($films);
$realisateur1->afficherFilmsParRealisateur($films);




?>