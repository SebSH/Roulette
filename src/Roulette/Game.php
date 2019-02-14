<?php
declare(strict_types=1);
namespace App\Roulette;
use App\Model\Round;
use App\Model\Bank;


class Game {

    /**@var Round */
    private $rounds = [];

    /**@var Bank */
    private $bank;

    /** @var ConsoleInteraction */
    private $consoleInteraction;

    public function launchRound(Round $rounds)
    {
        # code...
    }

    public function displayScoreBoards()
    {
        # code...
    }

    public function __construct(ConsoleInteraction $consoleInteraction)
    {
        $this->consoleInteraction = $consoleInteraction;
    }
    public function start(): void
    {
        $this->consoleInteraction->gameSay('Hello');
        do {
        $this->consoleInteraction->askText('Quel est votre nom ?');
        $this->consoleInteraction->askInt('Combien avez-vous dans vos poches ? (en €)');
        $this->consoleInteraction->askYesNo('Ajouter un nouveau joueur ? (Oui/Non)');
        } while ($this->consoleInteraction->askYesNo('Ajouter un nouveau joueur ? (Oui/Non)') === 'Oui');   
    }
}