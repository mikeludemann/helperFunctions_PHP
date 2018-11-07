<?php

function arrayToObject($array)
{
    $result = json_decode(json_encode($array), false);
    return is_object($result) ? "true" : "false";
}

?>