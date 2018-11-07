<?php
function arrayToJSON($array)
{
    if (is_array($array)) {

        $json = json_encode($array);

        return $json;

    } else {
        
        return false;

    }
}
?>