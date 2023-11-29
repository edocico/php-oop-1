<?php

class Production {

    public $title;
    public $language;
    public $rating = 0;
    public $director;

    function __construct($_title, $_language, $_rating, $_director)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
        $this->director = $_director;
    }

    public function setRating($rating) {
        if (is_numeric($rating) && $rating >= 1 && $rating <= 10) {

            $this->rating = $rating;
        };
    }

    public function getRating() {
        return $this->rating;
    }

    public function getDetails() {
        return "Title: $this->title <br/> Language $this->language <br/> Rating: $this->rating";
    }
}

$production1 = new Production('The Matrix', 'English', 9, 'Wachowski');
var_dump($production1);

$production2 = new Production('Once upon a time in america', 'English', 10, 'Sergio Leone');
var_dump($production2);

$production3 = new Production('Full metal jacket', 'English', 9.5, 'Kubrick');
var_dump($production3);

var_dump($production1->getDetails());

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
        <h1>Lista dei Film</h1>
    </header>
    <main>
       
            <?php foreach ($film_list as $production) { ?>
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