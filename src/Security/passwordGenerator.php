<?php
function passwordGenerator($chars, $filter)
{
    $data = "";

    if (strtolower($filter) == "number") {
        $data .= '1234567890';
    } elseif (strtolower($filter) == "string") {
        $data .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    } elseif (strtolower($filter) == "alphanumeric") {
        $data .= '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    } elseif (trim(strtolower($filter) == "special character")) {
        $data .= '!"§$%&/()=?`´ß+*#\'-.:,;<>/@~';
    } elseif (strtolower($filter) == "all") {
        $data .= '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!"§$%&/()=?`´ß+*#\'-.:,;<>/@~';
    }

    return substr(str_shuffle($data), 0, $chars);

}

?>