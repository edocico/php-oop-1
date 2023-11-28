<?php

class Production {

    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    public function setRating($rating) {
        $this->rating = intval($rating);
    }
}

?>