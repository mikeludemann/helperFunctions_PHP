<?php
function palindrome($string)
{
    if ($string == strrev($string)) {
        return "true";
    } else {
        return "false";
    }
}
?>