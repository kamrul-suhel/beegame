<?php
require __DIR__.'/vendor/autoload.php';

$bees = new \BeeGame\GameHelper();

$bees->add('\BeeGame\QueenBee', 1);
$bees->add('\BeeGame\WorkerBee', 5);
$bees->add('\BeeGame\DroneBee', 8);

echo '<pre>';
var_dump($bees->getAllBees());
echo '</pre>';
