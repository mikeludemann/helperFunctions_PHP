<?php

function between($left, $right, $string)
{
    preg_match_all('/' . preg_quote($left, '/') . '(.*?)' . preg_quote($right, '/') . '/s', $string, $matches);
    
    return array_map('trim', $matches[1]);
}

?>