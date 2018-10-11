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



}
