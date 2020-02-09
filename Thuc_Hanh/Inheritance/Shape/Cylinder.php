<?php
    include_once("Circle.php");

    class Cylinder extends Circle{
        public $height;

        public function __construct($name , $radius , $height)
        {
            $this->height = $height;
            parent::__construct($name,$radius);
        }

        public function calculateArea()
        {
            return 2 * parent::calculateArea() + parent::calculatePerimeter() * $this->height;    
        }

        public function calculateVolume()
        {
            return parent::calculateArea() * $this->height;
        }
    }
?>