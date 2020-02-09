<?php
    include_once("Circle.php");

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
            return "I am Cylinder with radius =  " . $this->getRadius() . ": height =  " . $this->getHeight() . ": color $this->color: area = " . $this->calculateArea() . ": Volume = " . $this->calculateVolume();
        }
    }
?>