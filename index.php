<?php
class Movie
{
    public $title;
    public $protagonist;
    public $plot;

    function __construct($title, $protagonist, $plot)
    {
        $this->title = $title;
        $this->protagonist = $protagonist;
        $this->plot = $plot;
    }
}
