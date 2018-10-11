<?php
namespace BeeGame;


class GameHelper
{
    protected $totalBees = [];

    protected $lastGoodState = [];

    public function add($class, $count){
        $this->lastGoodState[] = [$class, $count];

        for($i=0; $i < $count; $i++){
            $this->totalBees[] = new $class();
        }
    }

    public function randomBee(){
        return $this->totalBees[array_rand($this->totalBees, 1)];
    }

    public function getAllBees(){
        return $this->totalBees;
    }
}
