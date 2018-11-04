<?php

function getMinimum($arr)
{
    $getMin = $arr;

    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($arr[$i][$j] > $getMin) {

                $getMin = $arr[$i][$j];

            }

        }

    }

    echo $getMin;
}

?>