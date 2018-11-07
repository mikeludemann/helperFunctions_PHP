<?php
function startsWith($searchElement, $string)
{
    foreach ((array) $searchElement as $search) {
        if ($search !== '' && substr($string, 0, strlen($search)) === (string) $search) {
            return true;
        }
    }
    return false;
}
?>