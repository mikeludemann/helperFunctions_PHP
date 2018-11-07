<?php

function after($search, $string)
{
    return $search === '' ? $string : ltrim(array_reverse(explode($search, $string, 2))[0]);
}

?>