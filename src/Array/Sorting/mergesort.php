<?php
function mergeSort($array)
{
    if (count($array) == 1) {
        return $array;
    }

    $middle = count($array) / 2;
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);
    $left = mergeSort($left);
    $right = mergeSort($right);
    return merge($left, $right);
}

function merge($left, $right)
{
    $resource = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $resource[] = $right[0];
            $right = array_slice($right, 1);
        } else {
            $resource[] = $left[0];
            $left = array_slice($left, 1);
        }
    }
    while (count($left) > 0) {
        $resource[] = $left[0];
        $left = array_slice($left, 1);
    }
    while (count($right) > 0) {
        $resource[] = $right[0];
        $right = array_slice($right, 1);
    }
    return $resource;
}
?>