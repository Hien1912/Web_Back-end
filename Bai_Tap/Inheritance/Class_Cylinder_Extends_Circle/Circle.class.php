<?php

    class Circle{
        public $radius;
        public $color;
        
        public function __construct($radius,$color)
        {
            $this->radius =$radius;
            $this->color = $color;
        }
        
        public function setColor($color)
        {
            $this->color = $color;
        }
        
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        
        public function getRadius()
        {
            return $this->radius;
        }
        
        public function getColor()
        {
            return $this->color;
        }
        
        public function calculateArea()
        {
            return pi() * pow($this->radius,2);
        }
        
        public function claculatePerimeter()
        {
            return 2 * pi() * $this->radius;
        }
        
        public function __toString()
        {
            return "The Circle:<br>
                    Radius: " . $this->getRadius() . "<br>
                    color: " . $this->getColor() . "<br>
                    Area: " . $this->calculateArea() . "<br>
                    Perimeter: " . $this->claculatePerimeter();
        }
    }

?>