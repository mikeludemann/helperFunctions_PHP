<?php

function selectionsort($data)
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        $data = changePositions($data, $i, $min);
    }
    return $data;
}

function changePositions($data_array, $left, $right)
{
    $backupData = $data_array[$right];
    $data_array[$right] = $data_array[$left];
    $data_array[$left] = $backupData;
    return $data_array;
}

?>