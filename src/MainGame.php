<?php
namespace BeeGame;


class MainGame extends GamePlay
{
    protected $gameStart;
    public function __construct(GameHelper $helper)
    {
        parent::__construct();
        $this->gameStart = $helper;
    }

    public function progress(){
        parent::progress();
        $bee = $this->gameStart->randomBee();

        if($bee->isDead()){
            return false;
        }

        $bee->hit();

        $turn = [];

        $turn[] = $bee->getName(). ' was attacked with '. $bee->getDamage().' and now '.($bee->getLife() > 0 ? 'has'. $bee->getLife(). ' health left': ' is dead');

        if($bee->isDead() && $bee->getBurnThemAll()){
            $this->gameStart->burnThemAll();
            $turn[] = $bee->getName(). ' bee is dead, so the game has been destroyed.';

            $this->gameOver();
        }

        if($this->isGameOver()){
            $turn[] = 'All bees are dead, game over.';
        }

        $this->log($turn);
    }

    public function restart(){
        parent::restart();
        $this->gameStart->reset();
    }



}
