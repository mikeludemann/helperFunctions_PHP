<?php
function changeCaseSensitive($array, $caseSensitive)
{
    $case = $caseSensitive;
    $tmp = array();

    if (!is_array($array)) {

        return $tmp;

    }

    foreach ($array as $key => $value) {

        if (is_array($value)) {

            $tmp[$key] = changeCaseSensitive($value, $case);
            continue;

        }

        $tmp[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
        
    }

    return $tmp;
}

?>