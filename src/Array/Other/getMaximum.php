<?php

function getMaximum($arr)
{
    $getMax = 0;

    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($arr[$i][$j] > $getMax) {

                $getMax = $arr[$i][$j];

            }

        }

    }

    echo $getMax;
}

?>