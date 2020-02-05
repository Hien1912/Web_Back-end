<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $row=$_POST["row"];
        $col=$_POST["col"];
        $rowErr=((intval($row) == $row&&$row>0)?null:"Rows number must be integer and upper 0")??(empty($row)?"Rows number not be emty":null);
        $colErr=((intval($col) == $col&&$col>0)?null:"Cols number must be integer and upper 0")??(empty($col)?"Cols number not be emty":null);
        $max=$local=null;
        if (!$rowErr && !$colErr) {
            for ($i=0; $i < (int) $row; $i++) {
                for ($j=0; $j < (int) $col; $j++) {
                    $arr[$i][$j]=random_int(0,100);
                }
            }
            $max=findmax($arr);
            $local=findLocal($max,$arr);
        }
    }
    function findmax($arr) {
        $max=$arr[0][0];
        for ($i=0; $i < count($arr); $i++) {
            for ($j=0; $j < count($arr[$i]); $j++) {
                if ($max<$arr[$i][$j]) {
                    $max=$arr[$i][$j];
                }
            }
        }
        return $max;
    }
    function findLocal($num,$arr){
        $local="Local of max: ";
        for ($i=0; $i < count($arr); $i++) {
            for ($j=0; $j < count($arr[$i]); $j++) {
                if ($num==$arr[$i][$j]) {
                    $i++;
                    $j++;
                    $local .="<span>Row: $i Col: $j</span><br>";
                    $i--;
                    $j--;
                }
            }
        }
        return $local;
    }
?>