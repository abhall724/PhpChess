<?php

class King extends \objects\ChessPiece
{
    private $inCheck = false;
    
    public function __construct(\lib\Position $position, $color)
    {
        parent::__construct($position, $color);
        $this->name = "King";
    }

    public function setInCheck($checked)
    {
        if (!($checked instanceof Boolean))
        {
            throw new Exception("Check most be instance of boolean");
        }
        
        $this->inCheck = $checked;
    }

    public function isChecked()
    {
        return $this->inCheck;
    }

    /**
     * @return lib\Position[]
     */
    public function getMovesList()
    {
        return array(new lib\Position($this->x + 1, $this->y + 1),
            new lib\Position($this->x + 1, $this->y - 1),
            new lib\Position($this->x - 1, $this->y + 1),
            new lib\Position($this->x - 1, $this->y - 1));
    }
}