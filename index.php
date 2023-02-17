<?php
include __DIR__ . '/models/Movies.php';

$AntMan = new Movie("AntMan Quantumania", "Paul Rudd", "Scott Lang and Hope van Dyne, along with Scott's daughter Cassie Lang and Hope's parents Henry 'Hank' Pym and Janet van Dyne, accidentally find themselves trapped in the quantum realm and must face a new enemy, Kang the Conqueror.");
$Decision = new Movie("Decision to Leave", "Tang Wei", "While investigating in the rugged Korean mountains, where the body was found, he comes across the victim's wife, Seo-rae (Tang Wei), a rather mysterious woman of Chinese origins, who has become the main suspect in the case. In fact, the woman has signs on her body that indicate a probable collision, such as scratches and bruises. What's more, she doesn't seem to show much grief over the loss of her husband.'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>First Film:</p>
    <h2><?= $AntMan->title ?></h2>
    <p>Protagonista: <?= $AntMan->protagonist ?></p>
    <p>Trama: <?= $AntMan->plot ?></p>
    <hr>
    <p>Second Film:</p>
    <h2><?= $Decision->title ?></h2>
    <p>Protagonista: <?= $Decision->protagonist ?></p>
    <p>Trama: <?= $Decision->plot ?></p>
</body>

</html>