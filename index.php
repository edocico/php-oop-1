<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';
require_once __DIR__ . '/Traits/Director.php';


$movie1 = new Movie('The Matrix', 'English', 9, 'Wachowski', 171, 136 );

$movie2 = new Movie('Once upon a time in america', 'English', 10, 'Sergio Leone', 5, 229 );

$movie3 = new Movie('Full metal jacket', 'English', 9.5, 'Kubrick', 120, 116);

$movie4 = new Movie('Inception', 'English', 8, 'Nolan', 825, 148 );

$movie5 = new Movie('The Lion King', 'English', 8.5, 'Roger Allers', 1663, 89);

$serie1 = new Serie('Breaking Bad', 'English', 8.5, 5);

$serie2 = new Serie('Game of Thrones', 'English', 7.5, 8);

$serie3 = new Serie('The walking dead', 'English', 7, 11);

$serie4 = new Serie('The Sopranos', 'English', 8.5, 6);

$serie5 = new Serie('Romanzo Criminale', 'Italiano', 8, 2);


$production_list = [
   $movie1,
   $movie2,
   $movie3,
   $movie4,
   $movie5,
   $serie1,
   $serie2,
   $serie3,
   $serie4,
   $serie5,
];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Lista dei Film</h1>
    </header>
    <main>
       
            <?php foreach ($production_list as $production) { ?>
               <h3>TITOLO: <?php echo $production->title ?> </h3>
               <p>LINGUA ORIGINALE: <?php echo $production->language ?></p>
               <p>VOTO: <?php echo $production->rating ?></p>
               
            <?php
            }
            ?>
       
    </main>
    
</body>
</html>