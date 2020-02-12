<?php
include_once("Shape.class.php");

class Triangle extends Shape{
    protected float $side1;
    protected float $side2;
    protected float $side3;

    public function __construct($color = "white", $side1 = 1.0,  $side2 = 1.0,  $side3 = 1.0)
    {
        parent::__construct($color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function setSide($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }
    
    public function getSide2()
    {
        return $this->side2;
    }
    
    public function getSide3()
    {
        return $this->side3;
    }

    public function getSide()
    {
        return [
                "Side 1" => $this->side1,
                "Side 2" => $this->side2,
                "Side 3" => $this->side3
                ];
    }

    public function getArea()
    {
        $P = $this->getPerimeter();
        $A = $this->side1;
        $B = $this->side2;
        $C = $this->side3;
        return sqrt($P * ($P - $A) * ($P - $B) * ($P - $C)) / 4;
    
    }

    public function getPerimeter()
    {
        return ($this->side1 + $this->side2 + $this->side3) / 2;
    }

    public function __toString()
    {
        return "This triangle: <br>
                Color is $this->color<br>
                Side 1 = $this->side1<br>
                Side 2 = $this->side2<br>
                Side 3 = $this->side3<br>
                Perimeter = " . $this->getPerimeter() . "<br>
                Area = " . $this->getArea();
    }
}

?>