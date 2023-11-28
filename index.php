<?php

class Production {

    public $title;
    public $language;
    public $rating;
    public $director;

    function __construct($_title, $_language, $_rating, $_director)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
        $this->director = $_director;
    }

    public function setRating($rating) {
        $this->rating = intval($rating);
    }
}

$production1 = new Production('The Matrix', 'English', 9, 'Wachowski');
var_dump($production1);

$production2 = new Production('Once upon a time in america', 'English', 10, 'Sergio Leone');
var_dump($production2);

$production3 = new Production('Full metal jacket', 'English', 9.5, 'Kubrick');
var_dump($production3);

$film_list = [
    $production1,
    $production2,
    $production3,
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
        <h1>Tabella dei Film</h1>
    </header>
    <main>
        <ul>
            <?php foreach ($film_list as $production) { ?>
                <li>TITOLO: <?php echo $production->title?></li>
                <li>LINGUA ORIGINALE: <?php echo $production->language?></li>
                <li>VOTO: <?php echo $production->rating?></li>
                <li>REGISTA: <?php echo $production->director?></li>
            <?php
            }
            ?>
        </ul>
    </main>
    
</body>
</html>