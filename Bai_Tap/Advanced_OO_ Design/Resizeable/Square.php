<?php

include_once ('Rectangle.php');
include_once ('Resizeable.php');

class Square extends Rectangle implements Resizeable{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resizeAble($size)
    {
        $this->width *= 1 + ($size / 100);
        $this->height *= 1 + ($size / 100);
    }
}