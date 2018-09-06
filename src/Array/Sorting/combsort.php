<?php
function combSort($array)
{
    $combs = count($array);
    $swap = true;
    while ($combs > 1 || $swap) {
        if ($combs > 1) {
            $combs /= 1.25;
        }

        $swap = false;
        $i = 0;
        while ($i + $combs < count($array)) {
            if ($array[$i] > $array[$i + $combs]) {
                list($array[$i], $array[$i + $combs]) = array($array[$i + $combs], $array[$i]);
                $swap = true;
            }
            $i++;
        }
    }
    return $array;
}
?>