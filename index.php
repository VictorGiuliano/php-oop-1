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
    public function Premier()
    {
        echo "Disponibile ora in tutti i cinema";
    }
}
$AntMan = new Movie("AntMan Quantumania", "Scott", "A little man...");
$Decision = new Movie("Decision to Leave", "Tang Wei", "While investigating in the rugged Korean mountains, where the body was found, he comes across the victim's wife, Seo-rae (Tang Wei), a rather mysterious woman of Chinese origins, who has become the main suspect in the case. In fact, the woman has signs on her body that indicate a probable collision, such as scratches and bruises. What's more, she doesn't seem to show much grief over the loss of her husband.'");

var_dump($AntMan);
var_dump($Decision);
echo $AntMan->Premier();
