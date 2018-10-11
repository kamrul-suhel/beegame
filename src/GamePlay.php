<?php
namespace BeeGame;

class GamePlay {

    const BEE_GAME_OVER = 'game_over';

    const BEE_IN_PLAY = 'active';

    const BEE_INIT = 'initialize';

    protected $status;

    protected $turns = 0;

    protected $log = [];

    public function __construct()
    {
        $this->status = self::BEE_INIT;
    }

    public function progress()
    {
        if ($this->status !== self::BEE_IN_PLAY) {
            $this->status = self::BEE_IN_PLAY;
        }

        if ($this->isGameOver()) {
            return false;
        }

        $this->turns++;
    }

    public function gameOver()
    {
        $this->status = self::BEE_GAME_OVER;
    }

    public function isGameOver()
    {
        return $this->status == self::BEE_GAME_OVER;
    }

    public function turnCount()
    {
        return (int) $this->turns;
    }

    public function log($message)
    {
        $this->log[] = $message;
    }
}
