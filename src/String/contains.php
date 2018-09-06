<?php

function contains($string, $search)
{
    if (strpos($string, $search) !== false) {
        return 'true';
    } else {
        return 'false';
    }
}

?>