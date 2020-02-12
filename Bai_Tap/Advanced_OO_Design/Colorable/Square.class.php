<?php

class Square extends Rectangle implements Colorable{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function howToColor()
    {
        return "Color all four sides.";
    }
}

?>