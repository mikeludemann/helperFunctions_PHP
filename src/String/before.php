<?php

function before($search, $string)
{
    return $search === '' ? $string : rtrim(explode($search, $string)[0]);
}

?>