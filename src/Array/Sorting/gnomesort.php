<?php
function gnomeSort($array)
{
    $i = 1;
    $j = 2;
    while ($i < count($array)) {
        if ($array[$i - 1] <= $array[$i]) {
            $i = $j;
            $j++;
        } else {
            list($array[$i], $array[$i - 1]) = array($array[$i - 1], $array[$i]);
            $i--;
            if ($i == 0) {
                $i = $j;
                $j++;
            }
        }
    }
    return $array;
}
?>