<?php

function setSpecificArrayElement($key, $value, &$array)
{
    if (is_string($key) && !empty($key)) {
        $keys = explode('.', $key);
        $arrTmp = &$array;
        while (sizeof($keys) >= 1) {
            $k = array_shift($keys);
            if (!is_array($arrTmp)) {
                $arrTmp = [];
            }
            if (!isset($arrTmp[$k])) {
                $arrTmp[$k] = [];
            }
            if (sizeof($keys) === 0) {
                $arrTmp[$k] = $value;
                return true;
            }
            $arrTmp = &$arrTmp[$k];
        }
    }
    return false;
}

?>