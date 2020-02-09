<?php
    class Fan{
        private const SLOW = 1;
        private const MEDIUM = 2;
        private const FAST = 3;
        private int $speed = self::SLOW;
        private bool $on = false;
        private float $radius = 5;
        private string $color = 'blue';

        public function setSpeed($speed)
        {
            if ($this->on) {
                switch ($speed) {
                    case 'MEDIUM':
                        $this->speed = self::MEDIUM;
                        break;
                    case 'FAST':
                        $this->speed = self::FAST;
                        break;
                    default:
                        $this->speed = self::SLOW;
                        break;
                }
            }
            else{
                $this->speed = 0;
            }
        }
        public function getSpeed()
        {
            return $this->speed;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }

        public function getColor()
        {
            return $this->color;
        }
        
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }

        public function getRadius()
        {
            return $this->radius;
        }

        public function getStatus()
        {
            return $this->on;
        }

        public function switchStatus()
        {
            if ($this->on) {
                $this->on = false;
                $this->speed = 0;
            }
            else{
                $this->on = true;
                $this->speed = self::SLOW;
            }
        }
        public function __toString()
        {
            return "This Fan:<br>
                    speed = $this->speed<br>
                    color = $this->color<br>
                    radius = $this->radius<br>
                    fan is " . ($this->on ? 'on' : 'off');
        }
    }
?>