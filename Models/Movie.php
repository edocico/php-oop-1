<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production {

    public $profit;
    public $duration;

    public function setProfit($profit) {
        if(is_numeric($profit) && $profit >= 0) {
            $this->profit = intval($profit);
        }
    }

    public function setDuration($duration) {
        if(is_numeric($duration) && $duration >= 0) {
            $this->duration = intval($duration);
        }
    }

    function __construct($_title, $_language, $_rating, $_director, $_profit, $_duration)
    {
        parent::__construct($_title, $_language, $_rating, $_director);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }
}

?>