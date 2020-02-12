<?php

class MoveablePoint extends Point{
    protected float $xSpeed;
    protected float $ySpeed;

    public function __construct(float $x = 0, float $y = 0, float $xSpeed = 0, float $ySpeed = 0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSpeed(float $xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setYSpeed(float $ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed(float $xSpeed, float $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return ["xSpeed" => $this->xSpeed, "ySpeed" => $this->ySpeed];
    }
    public function __toString()
    {
        return "x = $this->x <br>
                y = $this->y <br>
                xSpeed = $this->xSpeed <br>
                ySpeed = $this->ySpeed<br>";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }
}

?>