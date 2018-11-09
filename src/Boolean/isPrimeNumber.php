<?php
function isPrimeNumber($number)
{
    for ($x = 2; $x < $number; $x++) {
        if ($number % $x == 0) {
            return 0;
        }
    }
    return 1;
}
?>