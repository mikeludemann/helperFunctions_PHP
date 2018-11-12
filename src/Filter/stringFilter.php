<?php
function stringFilter($string)
{
    $result = filter_var($string, FILTER_SANITIZE_STRING);

    return ($result) ? "true" : "false";
}
?>