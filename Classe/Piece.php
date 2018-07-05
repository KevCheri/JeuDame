<?php


namespace Classe;


abstract class Piece
{
    public function __construct(){
        echo get_class($this);
    }
}