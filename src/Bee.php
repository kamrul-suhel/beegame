<?php
namespace BeeGame;

class Bee
{
    protected $name;

    protected $health;

    protected $currentHealth;

    protected $hitPoint;

    protected $damage;

    protected $BURN_THEM_ALL;

    function __construct()
    {
        $this->currentHealth = $this->health;
    }

    public function getName()
    {
        return isset($this->name) ? $this->name : $this->name;
    }

    public function getHealth()
    {
        return $this->currentHealth;
    }

    public function getLife()
    {
        return $this->currentHealth;
    }

    public function getDamage(){
        return isset($this->damage) ? (int) $this->damage : 0;
    }

    public function hit()
    {
        if (((int) $this->currentHealth - (int) $this->damage) <= 0) {
            $this->currentHealth = 0;
        } else {
            $this->currentHealth = (int) $this->currentHealth - (int) $this->damage;
        }
    }

    public function isDead()
    {
        return (bool) $this->currentHealth <= 0;
    }

    public function reset()
    {
        $this->currentHealth = $this->health;
    }

    public function getBurnThemAll(){
        return isset($this->BURN_THEM_ALL) ? (bool) $this->BURN_THEM_ALL : false;
    }

    public function terminate(){
        $this->currentHealth = 0;
    }

}
