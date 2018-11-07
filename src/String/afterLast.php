<?php

function afterLast($search, $string)
{
    return $search === '' ? $string : ltrim(array_reverse(explode($search, $string))[0]);
}

?>