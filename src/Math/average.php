<?php

function average($arg)
{
    return array_sum(func_get_args($arg)) / func_num_args($arg);
}

?>