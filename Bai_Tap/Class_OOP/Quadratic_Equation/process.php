<?php
    class QuadraticEquation {
        public float $a;
        public float $b;
        public float $c;
        public function __construct($a , $b , $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function getA()
        {
            return $this->a;
        }

        public function getB()
        {
            return $this->b;
        }

        public function getC()
        {
            return $this->c;
        }

        public function getDiscriminant()
        {
            return (pow($this->getB() , 2)-(4 * $this->getA() * $this->getC()));
        }

        public function getRoot1()
        {
            return ((0 - $this->getB() + sqrt($this->getDiscriminant())) / (4 * $this->getA()));
        }

        public function getRoot2()
        {
            return ((0 - $this->getB() - sqrt($this->getDiscriminant())) / (4 * $this->getA()));
        }
    }
    function checkError($name,$val)
    {
        if (empty($val)) {
            return ucfirst($name) . " is Empty!";
        }
        return ucfirst($name) . " not a number!";
    }

    if (isset($_POST["submit"])) {
        $error=false;
        is_numeric($_POST["a"]) ? $a = $_POST["a"] : ($a = checkError("a",$_POST["a"])) && $error=true;
        is_numeric($_POST["b"]) ? $b = $_POST["b"] : ($b = checkError("b",$_POST["b"])) && $error=true;
        is_numeric($_POST["c"]) ? $c = $_POST["c"] : ($c = checkError("c",$_POST["c"])) && $error=true;
        if (!$error) {
            $qe = new QuadraticEquation($a , $b , $c);
            $delta = $qe->getDiscriminant();
            $a = $qe->a;
            $b = $qe->b;
            $c = $qe->c;
            if (!$a && !$b && !$c) {
                $root = "The equation has both infinity roots";
            }
            elseif($a){
                if ($delta >= 0) {
                    if (!$delta) {
                        $root = "The equation has one root is " . $qe->getRoot1();
                    }
                    else {
                        $root = "The equation has two root " . $qe->getRoot1() . " and " . $qe->getRoot2();
                    }
                }
                else {
                    $root = "The equation has no roots";
                }
            }
            else {
                if ($b) {
                    $root = "The equation has one root is " . -$c / $b;
                }
                else {
                    $root = "The equation has no roots";
                }
            } 
        }
    }
?>