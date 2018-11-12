<?php
function floatFilter($float)
{
    $san = filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $validFloat = intval($san);

    $result = filter_var($validFloat, FILTER_VALIDATE_FLOAT) === 0 || $validFloat;

    return ($result) ? "true" : "false";
}
?>