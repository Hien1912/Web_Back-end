<?php
    include_once("Shape.php");

    class Rectangle extends Shape
    {
        public $width;
        public $height;

        public function __construct($name, $width, $height)
        {
            $this->height = $height;
            $this->width = $width;
            parent::__construct($name);
        }

        public function calculateArea()
        {
            return $this->width * $this->height;
        }

        public function calculatePerimeter()
        {
            return 2 * ($this->width + $this->height);
        }
    }
?>