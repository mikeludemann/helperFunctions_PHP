<?php

function getSpecificArrayElement($key, $array)
{
    if (is_string($key) && is_array($array)) {
        $keys = explode('.', $key);
        while (sizeof($keys) >= 1) {
            $k = array_shift($keys);
            if (!isset($array[$k])) {
                return null;
            }
            if (sizeof($keys) === 0) {
                return $array[$k];
            }
            $array = &$array[$k];
        }
    }
    return null;
}

?>