<?php 

class Production {

    public $title;
    public $language;
    public $rating = 0;
    

    function __construct($_title, $_language, $_rating,)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
        
    }

    public function setRating($rating) {
        if (is_numeric($rating) && $rating >= 1 && $rating <= 10) {

            $this->rating = $rating;
        };
    }

    public function getRating() {
        return $this->rating;
    }

    
}

?>