<?php
function columns($array)
{
    if (count($array) == 0) {
        return array();
    } else if (count($array) == 1) {
        return array_chunk($array[0], 1);
    }

    array_unshift($array, null);
    
    $transpose = call_user_func_array('array_map', $array);
    return array_map('array_filter', $transpose);
}

function beadSort($array)
{
    foreach ($array as $elem) {
        $poles[] = array_fill(0, $elem, 1);
    }

    return array_map('count', columns(columns($poles)));
}
?>