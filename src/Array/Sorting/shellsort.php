<?php
function shellSort($array)
{
    $x = round(count($array) / 2);
    while ($x > 0) {
        for ($i = $x; $i < count($array); $i++) {
            $tmp = $array[$i];
            $j = $i;
            while ($j >= $x && $array[$j - $x] > $tmp) {
                $array[$j] = $array[$j - $x];
                $j -= $x;
            }
            $array[$j] = $tmp;
        }
        $x = round($x / 2.2);
    }
    return $array;
}

?>