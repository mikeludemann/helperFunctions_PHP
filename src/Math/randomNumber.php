<?php
function randomNumber($startNumber, $endNumber, $multiplex)
{
    $startDefault = 0;
    $endDefault = 1;
    $multiplicator = 1000000;

    $start = $startNumber;
    $end = $endNumber;
    $multi = $multiplex;

    if ($start > $end) {
        return false;
    }

    if ($start == "" || $start == null) {
        $start = $startDefault;
    } elseif ($end == "" || $end == null) {
        $end = $endDefault;
    } elseif ($multi == "" || $multi == null) {
        $multi = $multiplicator;
    }

    return mt_rand($start * $multi, $end * $multi) / $multi;
}
?>