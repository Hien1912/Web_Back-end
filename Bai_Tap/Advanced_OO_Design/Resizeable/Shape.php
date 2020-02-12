<?php
include_once ('Resizeable.php');

class Shape {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showInfor(){
        return "I am a shape. My name is $this->name";
    }
}

?>