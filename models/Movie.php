<?
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
    public function Premier()
    {
        echo "Disponibile ora in tutti i cinema";
    }
}
