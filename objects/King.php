<?php

namespace objects;

use lib\Position;

class King extends ChessPiece
{
    private $inCheck = false;

    public function __construct(Position $position, $color)
    {
        parent::__construct($position, $color);
        $this->name = "King";
    }

    public function setInCheck($checked)
    {
        if (!(is_bool($checked)))
        {
            throw new \Exception("Check must be instance of boolean");
        }
        
        $this->inCheck = $checked;
    }

    public function isChecked()
    {
        return $this->inCheck;
    }

    /**
     * @return Position[]
     */
    public function getMovesList()
    {
        return array(new Position($this->position->x + 1, $this->position->y + 1),
            new Position($this->position->x + 1, $this->position->y - 1),
            new Position($this->position->x - 1, $this->position->y + 1),
            new Position($this->position->x - 1, $this->position->y - 1),
            new Position($this->position->x, $this->position->y + 1),
            new Position($this->position->x, $this->position->y - 1),
            new Position($this->position->x + 1, $this->position->y),
            new Position($this->position->x - 1, $this->position->y));
    }
}