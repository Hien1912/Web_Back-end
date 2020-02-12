<?php

class Point2D{
    protected float $x;
    protected float $y;

    public function __construct( float $x = 0.0 , float $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;   
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return [$this->x , $this->y];
    }

    public function __toString()
    {
        return "This is class Point2D: <br>
                x = $this->x <br>
                y = $this->y <br>";
    }
}

?>