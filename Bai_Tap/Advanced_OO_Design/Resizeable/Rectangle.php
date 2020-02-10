<?php

include_once ('Shape.php');
include_once ('Resizeable.php');

class Rectangle extends Shape implements Resizeable {
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function resizeAble($size)
    {
        $this->width *= 1 + ($size / 100);
        $this->height *= 1 + ($size / 100);
    }

    public function calculateArea() {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}