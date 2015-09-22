<?php

class ChessPiece
{
    protected $x;
    protected $y;
    protected $name;
    protected $color;

    public function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    public function calculateMoves($chessBoard)
    {
        
    }
}