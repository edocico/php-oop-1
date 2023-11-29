<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production {

    public $season;

    public function setSeason($season) {
        if(is_numeric($season) && $season >= 0) {
            $this->season = intval($season);         
        }
    }

    function __construct($_title, $_language, $_rating, $_director, $_season)
    {
        parent::__construct($_title, $_language, $_rating, $_director);
        $this->setSeason($_season);
    }
}

?>