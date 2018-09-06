<?php
function getMemorySize()
{

    $memory_size = memory_get_usage();
    $memory_unit = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB');

    return round($memory_size / pow(1024, ($x = floor(log($memory_size, 1024)))), 2) . ' ' . $memory_unit[$x];

}
?>