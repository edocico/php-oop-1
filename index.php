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





/* $production_list = [
   
];
 */

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
               <p>REGISTA: <?php echo $production->director ?></p>
            <?php
            }
            ?>
       
    </main>
    
</body>
</html>