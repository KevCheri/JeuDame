<?php

namespace Classe;

class Damier {
    private $damier;

    private $mapSize;

    public function __construct(int $mapSize){
        $damier = [];
        for ($rowId = 0; $rowId < $mapSize; $rowId++){
            $damier[$rowId] = [];
            for ($colId = 0; $rowId < $mapSize; $rowId++){
                $damier[$rowId][$colId] = null;
            }
        }
        $this -> damier = $damier;
        $this->mapSize = $mapSize;
    }
    public function getSize(): int{
        return $this->mapSize;
    }
    public function getdamiers(int $rowId, int $colId){
        return $this-> damier[$rowId][$colId];
    }

}

