<?php

namespace Classe;

class Player
{
    private $name;
    private $item = [];

    public function __construct(string $name, int $numberItem)
    {
        $this->name = $name;
        $item = [];
        for ($pion=0; $pion < $numberItem; $pion++){
            $item[$pion] = new Pion;
        }
        $this->item = $item;
    }
}