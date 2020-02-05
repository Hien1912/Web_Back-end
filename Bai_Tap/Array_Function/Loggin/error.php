<?php
    $temp=json_decode(file_get_contents("users.json"));
    for ($i=0; $i < count($temp); $i++) {
        $temp[$i]=(array)$temp[$i];
        $table="<tr>";
        foreach ($temp[$i] as $key => $value) {
            $table .= "<td>$value</td>";
        }
        echo $table .= "</tr>";
    }
?>