<?php
declare(strict_types=1);
namespace App\Model\Round;
class Bank {

    /**@var int|null */
    private $amount;

    public function __construct(?int $amount)
    {
        $this->amount = 0;
    }

    public function dispatch()
    {
        # code...
    }
}