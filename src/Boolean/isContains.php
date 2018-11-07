<?php

function isContains($searchElement, $string)
{
    foreach ((array) $searchElement as $search) {
        if (strpos($string, $search) !== false) {
            return true;
        }
    }
    return false;
}

?>