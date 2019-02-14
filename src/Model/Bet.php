<?php
declare(strict_types=1);
include_once("Case.php");

class Bet {

    /**@var int */
    private $amount;

    /**@var Cases */
    private $cases;

    public function __construct(Cases $cases)
    {
        $this->cases = $cases;
    }
    
}