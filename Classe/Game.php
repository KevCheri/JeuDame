<?php


namespace Classe;


class Game
{
    private $playerOne;
    private $playerTwo;
    private $map;

    public function __construct(Player $playerOne, Player $playerTwo, Map $map)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $this->map = $map;
    }

    public function displayHtml()
    {
        $this->map->displayHtml();
    }
}