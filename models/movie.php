<?php

include_once __DIR__ . '/production.php';

class Movie extends Production
{
    public $profit;
    public $duration;


    function __construct($_title, $_language, $_vote, $_profit, $_duration)
    {
        $this->profit = $_profit;
        $this->duration = $_duration;
        parent::__construct($_title, $_language, $_vote);
    }

    function setProfit($_profit)
    {
        $this->profit = $_profit;
    }

    function getProfit()
    {
        return $this->profit;
    }

    function setDuration($_duration)
    {
        $this->duration = $_duration;
    }

    function getDuration()
    {
        return $this->duration;
    }
}
