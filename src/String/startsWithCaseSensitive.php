<?php
function startsWithCaseSensitive($searchElement, $string)
{
    $str = strtolower($string);

    foreach ((array) $searchElement as $search) {

        $s = strtolower($search);

        if ($s !== '' && substr($str, 0, strlen($s)) === (string) $search) {
            return true;
        }

    }
    
    return false;
}
?>