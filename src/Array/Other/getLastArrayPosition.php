<?php
function getLastArrayElement($array)
{
    return $array[array_keys($array)[sizeof($array) - 1]];
}
?>