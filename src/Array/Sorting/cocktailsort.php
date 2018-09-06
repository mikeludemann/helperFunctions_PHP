<?php
function cocktailSort($array)
{
    if (is_string($array)) {
        $array = str_split(preg_replace('/\s+/', '', $array));
    }

    do {
        $swap = false;
        for ($i = 0; $i < count($array); $i++) {
            if (isset($array[$i + 1])) {
                if ($array[$i] > $array[$i + 1]) {
                    list($array[$i], $array[$i + 1]) = array($array[$i + 1], $array[$i]);
                    $swap = true;
                }
            }
        }

        if ($swap == false) {
            break;
        }

        $swap = false;
        for ($i = count($array) - 1; $i >= 0; $i--) {
            if (isset($array[$i - 1])) {
                if ($array[$i] < $array[$i - 1]) {
                    list($array[$i], $array[$i - 1]) = array($array[$i - 1], $array[$i]);
                    $swap = true;
                }
            }
        }
    } while ($swap);

    return $array;
}
?>