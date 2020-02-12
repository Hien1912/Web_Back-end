<?php 

class Shape{
    protected string $color;

    public function __construct(string $color = "white")
    {
        $this->color = $color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function __toString()
    {
        return "This shape has color is $this->color";
    }
}

?>