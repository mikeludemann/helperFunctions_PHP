<?php

function truncateWords($string, $countWords, $replace)
{
    $arrayWords = explode(' ', $string);

    if (sizeof($arrayWords) <= $countWords) {
        return $string;
    }

    return implode(' ', array_slice($arrayWords, 0, $countWords)) . $replace;
}

#############################################################################

function truncate($string, $countwords, $replace)
{
    if (mb_strwidth($string, 'UTF-8') <= $countwords) {
        return $string;
    }
    return rtrim(mb_strimwidth($string, 0, $countwords, '', 'UTF-8')) . $replace;
}

?>