<?php

function endsWith($searchElement, $string)
{
    foreach ((array) $searchElement as $search) {
        $length = strlen($search);
        if ($length === 0 || (substr($string, -$length) === (string) $search)) {
            return true;
        }
    }
    return false;
}

?>