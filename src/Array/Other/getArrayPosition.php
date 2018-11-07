<?php
function getArrayPosition($array, $position)
{
    return $array[array_keys($array)[$position - 1]];
}
?>