<?php

function mergeTwoArray($firstArray, $secondArray)
{
    $temp = array();

    $temp[] = $firstArray;
    
    if (is_scalar($secondArray)) {

        $temp[] = $secondArray;

    } else {

        foreach ($secondArray as $key => $value) {

            $temp[] = $value;

        }

    }

    return $temp;

}

?>