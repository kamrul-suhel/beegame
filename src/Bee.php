<?php
namespace BeeGame;

class Bee
{
    protected $name;

    protected $health;

    protected $currentHealth;

    protected $hitPoint;

    protected $damage;

    function __construct()
    {
        $this->currentHealth = $this->health;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getHealth()
    {
        return $this->currentHealth;
    }

    public function getLife()
    {
        return $this->currentHealth;
    }

    public function hit()
    {
        if (($this->currentHealth - $this->damage) <= 0) {
            $this->currentHealth = 0;
        } else {
            $this->currentHealth= $this->currentHealth - $this->damage;
        }
    }

    public function isDead()
    {
        return (bool) $this->currentHealth <= 0;
    }

}
