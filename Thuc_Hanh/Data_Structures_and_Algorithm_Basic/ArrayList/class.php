<?php

    class ArrayList {
        public $arraylist;

        public function arrayList($arr = null)
        {
            if (is_array($arr)) {
                $this->arraylist = $arr;
            }
            else{
                $this->arraylist = array();
            }
        }

        public function add($obj)
        {
            array_push($this->arraylist, $obj);
        }

        public function get($i)
        {
            if ($this->isInteger($i) && $i < $this->size()) {
                return $this->arraylist[$i];
            }else {
                die("ERROR in ArrayList.get");
            }
        }

        public function isInteger($i)
        {
            return preg_match("/^[0-9]+$/", $i);
        }

        public function size()
        {
            return count($this->arraylist);
        }
    }
    
?>