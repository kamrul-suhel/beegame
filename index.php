<?php
require __DIR__.'/vendor/autoload.php';

$bees = new \BeeGame\GameHelper();

$bees->add('\BeeGame\QueenBee', 1);
$bees->add('\BeeGame\WorkerBee', 5);
$bees->add('\BeeGame\DroneBee', 8);

$beginGame = new \BeeGame\MainGame($bees);
$resetUrl = __DIR__.'?gameStart=true';
$output = '';
$output .= '<a href="'.$resetUrl.'">Game game begin</a>';

$startGame = isset($_GET['gameStart']) ? (bool) $_GET['gameStart'] : false;
if($startGame){
    $output .='<ul>';
    while(!$beginGame->isGameOver()){
        $beginGame->progress();
        $result = $beginGame->getMessage();
        $turn = $beginGame->turnCount();
        $output .= '<li>'. $result[0]. '</li>';
    }
    $output .='</url>';
}

echo $output;

