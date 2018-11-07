<?php

function endsWith($searchElement, $string)
{
    $str = strtolower($string);

    foreach ((array) $searchElement as $search) {

        $s = strtolower($search);

        $length = strlen($search);

        if ($length === 0 || (substr($str, -$length) === (string) $s)) {
            return true;
        }

    }

    return false;
}

?>