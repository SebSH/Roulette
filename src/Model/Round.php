<?php
declare(strict_types=1);
namespace App\Model\Round;
use App\Model\Bank;
include_once("Bet.php");

class Round {

    /**@var Bet */
    private $betByPlayer = [];
    
    private $players;

    /**@var Bank */
    private $bank;

    /**@var Cases */
    private $wheelsResult;

    public function __construct(Bank $bank)
    {
        $this->rounds = $rounds;
    }

    public function addPlayer(PlayerInterface $players)
    {
        # code...
    }

    public function addBet(Bet $betByPlayer)
    {
        # code...
    }
}