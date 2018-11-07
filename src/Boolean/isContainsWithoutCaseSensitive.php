<?php

function isContainsWithoutCaseSensitive($searchElement, $string)
{
    foreach ((array) $searchElement as $search) {
        if (stripos($string, $search) !== false) {
            return true;
        }
    }
    return false;
}

?>