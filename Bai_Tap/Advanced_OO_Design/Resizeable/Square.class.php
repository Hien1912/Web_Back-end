<?php

class Square extends Rectangle implements Resizeable {
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}

?>