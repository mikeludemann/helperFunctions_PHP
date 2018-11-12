<?php
function ipFilter($ip)
{
    $result = filter_var($ip, FILTER_VALIDATE_IP);

    return ($result) ? "true" : "false";
}
?>