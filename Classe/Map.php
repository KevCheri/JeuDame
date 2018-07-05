<?php

namespace Classe;

class Map
{
    private $board;
    public function __construct($map)
    {
        $board = [];
        for ($rowId = 0; $rowId < $map; $rowId++) {
            $board[$rowId] = [];
            for ($colId = 0; $colId < $map; $colId++) {
                if(($rowId%2 == 0 && $colId%2 == 1) OR ($rowId%2 == 1 && $colId%2 == 0))
                    $board[$rowId][$colId] = new BlackCell();
                else
                    $board[$rowId][$colId] = new WhiteCell();
                //$board[$rowId][$colId] = $rowId . "," . $colId;
            }
        }
        $this->board = $board;
    }
    public function getCell(int $rowId, int $colId): string{
        if(!isset($this->board[$rowId][$colId])){
            throw new Board_Out_Of_Bound_Aries_Exception($rowId, $colId, count($this->board));
        }
        return $this->board[$rowId][$colId];
    }
    public function getSize()
    {
        return count($this->board);
    }
   public function displayHtml()
    {
        $map = $this->getSize();
        $board = $this;
        ob_start();
        require __DIR__.'/../view/board.php';
        echo ob_end_flush();
    }
}




