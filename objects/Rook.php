<?php

namespace objects;

use lib\Position;

class Rook extends ChessPiece
{
    public function __construct(Position $position, $color)
    {
        parent::__construct($position, $color);
        $this->name = "Rook";
    }

    /**
     * @return Position[]
     */
    public function getMovesList()
    {
        return array(new Position($this->position->x + 1, $this->position->y),
            new Position($this->position->x + 2, $this->position->y),
            new Position($this->position->x + 3, $this->position->y),
            new Position($this->position->x + 4, $this->position->y),
            new Position($this->position->x + 5, $this->position->y),
            new Position($this->position->x + 6, $this->position->y),
            new Position($this->position->x + 7, $this->position->y),
            new Position($this->position->x - 1, $this->position->y),
            new Position($this->position->x - 2, $this->position->y),
            new Position($this->position->x - 3, $this->position->y),
            new Position($this->position->x - 4, $this->position->y),
            new Position($this->position->x - 5, $this->position->y),
            new Position($this->position->x - 6, $this->position->y),
            new Position($this->position->x - 7, $this->position->y),
            new Position($this->position->x, $this->position->y + 1),
            new Position($this->position->x, $this->position->y + 2),
            new Position($this->position->x, $this->position->y + 3),
            new Position($this->position->x, $this->position->y + 4),
            new Position($this->position->x, $this->position->y + 5),
            new Position($this->position->x, $this->position->y + 6),
            new Position($this->position->x, $this->position->y + 7),
            new Position($this->position->x, $this->position->y - 1),
            new Position($this->position->x, $this->position->y - 2),
            new Position($this->position->x, $this->position->y - 3),
            new Position($this->position->x, $this->position->y - 4),
            new Position($this->position->x, $this->position->y - 5),
            new Position($this->position->x, $this->position->y - 6),
            new Position($this->position->x, $this->position->y - 7));
    }
}