<?php
namespace BeeGame;

class WorkerBee extends Bee {
    protected $health = 75;

    protected $damage = 10;

    public $name = 'Worker bee';

    protected $BURN_THEM_ALL = false;
}
