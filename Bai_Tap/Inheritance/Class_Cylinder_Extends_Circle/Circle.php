<?php

    class Circle{
        public $radius;
        public $color;
        // Constructor
        public function __construct($radius,$color)
        {
            $this->radius =$radius;
            $this->color = $color;
        }
        // Set Color
        public function setColor($color)
        {
            $this->color = $color;
        }
        // Set radius
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        // get radius
        public function getRadius()
        {
            return $this->radius;
        }
        // get color
        public function getColor()
        {
            return $this->color;
        }
        // get Area
        public function calculateArea()
        {
            return pi() * pow($this->radius,2);
        }
        // get perimeter
        public function claculatePerimeter()
        {
            return 2 * pi() * $this->radius;
        }
        // get infor
        public function __toString()
        {
            return "I am Circle with Radius = " . $this->getRadius() . ": color " . $this->getColor() . ": area = " . $this->calculateArea() . ": perimeter = " . $this->claculatePerimeter();
        }
    }

?>