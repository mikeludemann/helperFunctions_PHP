<?php
function isSorted($list)
{
    $counter = count($list);
    for ($j = 1; $j < $counter; $j++) {
        if ($list[$j - 1] > $list[$j]) {
            return false;
        }
    }
    return true;
}
function bogoSort($list)
{
    do {
        shuffle($list);
    } while (!isSorted($list));
    return $list;
}
?>