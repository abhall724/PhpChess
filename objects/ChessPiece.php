<?php

namespace objects;

abstract class ChessPiece
{
    protected $position;
    protected $name;
    protected $color;

    public function __construct(\lib\Position $position, $color)
    {
        $this->position = $position;
        $this->color = $color;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(\lib\Position $position)
    {
        if ($this->checkLegalMove($position)) {
            $this->position = $position;
        }
        else
        {
            throw new \Exception("Illegal Move");
        }
    }

    protected function checkLegalMove(\lib\Position $position)
    {
        if ($position->x < 8 && $position->x > 0) {
            if ($position->y < 8 && $position->y > 0) {
                return true;
            }
        }

        return false;
    }

    abstract function getMovesList();
}