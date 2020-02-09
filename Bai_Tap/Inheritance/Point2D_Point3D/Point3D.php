<?php
    include_once("Point2D.php");

    class Point3D extends Point2D{
        protected float $y;

        public function __construct(float $x = 0.0 , float $y = 0.0 , float $z = 0.0)
        {
            parent::__construct($x,$y);
            $this->z = $z;
        }

        public function setZ(float $z)
        {
            $this->z = $z;
        }

        public function getZ()
        {
            return $this->z;
        }

        public function setXYZ(float $x, float $y, float $z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }

        public function getXY()
        {
            return [$this->x , $this->y , $this->z];
        }

        public function __toString()
        {
            return "This is class Point3D: <br>
                x = $this->x <br>
                y = $this->y <br>
                z = $this->z <br>";
        }
    }

?>