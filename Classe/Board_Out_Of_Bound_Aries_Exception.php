<?php


namespace Classe;


use Throwable;

class Board_Out_Of_Bound_Aries_Exception extends \LogicException
{
   public function __construct(int $rowId, int $colId, int $size)
   {
       parent::__construct('Unable to access cell'.$rowId.' '.$colId.' '.$size);
   }
}