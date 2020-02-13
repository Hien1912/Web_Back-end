<?php

class Cylinder
{
    public $radius;
    public $volume;
    public $baseArea;
    public $perimeter;
    public $height;

    public function __construct($radius = 0, $height = 0)
    {
        $this->radius = $radius;
        $this->height = $height;
    }



    public function getVolume()
    {
        $this->calculatePerimeter();
        $this->calculateBaseArea();
        $this->volume = $this->perimeter * $this->height + 2 * $this->baseArea;
        return $this->volume;
    }

    public function calculateBaseArea()
    {
        $this->baseArea = pi() * $this->radius * $this->radius;
        return $this->baseArea;
    }

    function calculatePerimeter()
    {
        $this->perimeter = 2 * pi() * $this->radius;
        return $this->perimeter;
    }

    /**
     * Get the value of radius
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set the value of radius
     *
     * @return  self
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }
}
