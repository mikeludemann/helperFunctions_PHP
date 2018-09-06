<?php

function quicksort($array)
{
    $lt = $gt = array();

    if (count($array) < 2) {
        return $array;
    }

    $data_keys = key($array);
    $data_values = array_shift($array);

    foreach ($array as $val) {
        if ($val <= $data_values) {
            $lt[] = $val;
        } elseif ($val > $data_values) {
            $gt[] = $val;
        }
    }

    return array_merge(quicksort($lt), array($data_keys => $data_values), quicksort($gt));

}

?>