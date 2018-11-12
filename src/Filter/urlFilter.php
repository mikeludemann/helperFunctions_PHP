<?php
function urlFilter($url)
{
    $result = filter_var($url, FILTER_VALIDATE_IP);

    return ($result) ? "true" : "false";
}
?>