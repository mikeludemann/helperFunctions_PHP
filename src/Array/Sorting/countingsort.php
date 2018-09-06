<?php
function countsingSort($array, $min, $max)
{
    $counts = array();
    for ($i = $min; $i <= $max; $i++) {
        $counts[$i] = 0;
    }

    foreach ($array as $number) {
        $counts[$number]++;
    }
    $z = 0;
    for ($i = $min; $i <= $max; $i++) {
        while ($counts[$i]-- > 0) {
            $array[$z++] = $i;
        }
    }
    return $array;
}
?>