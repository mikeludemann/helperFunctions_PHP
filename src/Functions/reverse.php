<?php
function reverseType($string, $type)
{
    if (gettype($string) === $type) {
        $rev = strrev($string);

        return $rev;
    } else {
        return false;
    }
}

function reverse($string)
{
    $n = strlen($string);
    if ($n == 1) {
        return $string;
    } else {
        $n--;
        return reverse(substr($string, 1, $n)) . substr($string, 0, 1);
    }
}

?>