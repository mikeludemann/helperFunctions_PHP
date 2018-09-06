<?php
function bucketsort($array)
{
    $n = sizeof($array);
    $buckets = array();
    
    for ($i = 0; $i < $n; $i++) {
        $buckets[$i] = array();
    }
    
    foreach ($array as $elem) {
        array_push($buckets[ceil($elem / 10)], $elem);
    }
    
    $j = 0;
    for ($i = 0; $i < $n; $i++) {
        
        if (!empty($buckets[$i])) {
            insertionsort($buckets[$i]);
            
            foreach ($buckets[$i] as $elem) {
                $array[$j++] = $elem;
            }
        }
    }
    return $array;
}

function insertionsort($array, $fn = 'comparison')
{
    if (!is_array($array) || !is_callable($fn)) {
        return;
    }

    for ($i = 1; $i < sizeof($array); $i++) {
        $key = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $fn($key, $array[$j])) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j + 1] = $key;
    }
}

function comparison($a, $b)
{
    return $a < $b;
}
?>