<?php
function isJSON($string)
{
    return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? "true (" . true . ")" : "false (" . false . ")";
}

function jsonToArray($json)
{
    if (isJSON($json)) {

        $array = json_decode($json);

        return $array;

    } else {
        
        return false;

    }
}
?>