<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shape = $_POST["shape"];
        switch ($shape) {
            case "rect":
                echo drawRect();
                break;
            case "bottomleft":
                echo drawTriagle1();
                break;
            case "topleft":
                echo drawTriagle2();
                break;
            case "bottomright":
                echo drawTriagle4();
                break;
            case "topright":
                echo drawTriagle3();
                break;
            case "isosceles":
                echo drawIsoTriagle();
                break;
        }
    }

    function drawRect()
    {
        $temp = "<table>";
        for ($i = 0; $i < 10; $i++) {
            $temp .= "<tr>";
            for ($j = 0; $j < 20; $j++) {
                $temp .= "<td>*</td>";
            }
            $temp .= "</tr>";
        }
        $temp .= "</table>";
        return $temp;
    }

    function drawTriagle1()
    {
        $temp = "<table>";
        for ($i = 0; $i < 10; $i++) {
            $temp .= "<tr>";
            for ($j = 0; $j < $i; $j++) {
                $temp .= "<td>*</td>";
            }
            $temp .= "</tr>";
        }
        $temp .= "</table>";
        return $temp;
    }

    function drawTriagle2()
    {
        $temp = "<table>";
        for ($i = 10; $i > 0; $i--) {
            $temp .= "<tr>";
            for ($j = $i; $j > 0; $j--) {
                $temp .= "<td>*</td>";
            }
            $temp .= "</tr>";
        }
        $temp .= "</table>";
        return $temp;
    }

    function drawTriagle3()
    {
        $temp = "<table>";
        for ($i = 0; $i < 10; $i++) {
            $temp .= "<tr>";
            for ($j = 0; $j < $i; $j++) {
                $temp .= "<td></td>";
            }
            for ($j = 10 - $i; $j > 0; $j--) {
                $temp .= "<td>*</td>";
            }
            $temp .= "</tr>";
        }
        $temp .= "</table>";
        return $temp;
    }

    function drawTriagle4()
    {
        $temp = "<table>";
        for ($i = 0; $i < 10; $i++) {
            $temp .= "<tr>";
            for ($j = 10 - $i; $j > 0; $j--) {
                $temp .= "<td></td>";
            }
            for ($j = 0; $j < $i; $j++) {
                $temp .= "<td>*</td>";
            }
            $temp .= "</tr>";
        }
        $temp .= "</table>";
        return $temp;
    }
    
    function drawIsoTriagle()
    {
        $temp = "<table>";
        for ($i = 0; $i < 20; $i++) {
            $temp .= "<tr>";
            for ($j = 0; $j < 20; $j++) {
                if ($j < $i && $j > 20 - $i) {
                    $temp .= "<td>*</td>";
                } else {
                    $temp .= "<td></td>";
                }
            }
            $temp .= "</tr>";
        }
        $temp .= "</table>";
        return $temp;
    }
?>