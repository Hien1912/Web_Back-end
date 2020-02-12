<?php

class Cylinder extends Circle{
    public $height;

    public function __construct($radius,$color,$height)
    {
        $this->height = $height;
        parent::__construct($radius,$color);
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea()
    {
        return 2 * parent::calculateArea() + parent::claculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString()
    {
        return "The Cylinder: <br>
                Radius: " . $this->getRadius() . "<br>
                Height: " . $this->getHeight() . "<br>
                Color $this->color <br>
                Area: " . $this->calculateArea() . "<br>
                Volume: " . $this->calculateVolume();
    }
}

?>