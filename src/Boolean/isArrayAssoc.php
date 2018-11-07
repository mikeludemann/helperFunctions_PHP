<?php
function isArrayAssoc($array)
{
    if (!is_array($array) || $array === []) {
        return false;
    }
    return array_keys($array) !== range(0, count($array) - 1);
}
?>