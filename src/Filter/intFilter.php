<?php
function intFilter($int, $min = 1, $max = 100)
{
    $result = "";

    $san = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    $validInt = intval($san);

    if (filter_var($validInt, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) !== false) {
        if (filter_var($validInt, FILTER_VALIDATE_INT) >= 0) {
            $result .= "true";
        } else {
            $result .= "false";
        }
    } else {
        $result .= "false";
    }

    return $result;
}
?>