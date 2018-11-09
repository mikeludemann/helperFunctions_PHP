<?php
function removeSpecialCharacter($string, $pattern)
{
    $default = '/[^a-zA-Z0-9 ]/';
    $custom = $pattern;

    if ($custom != "" || $custom != null) {
        if (preg_replace($custom, "", $string)) {
            return true;
        } else {
            return false;
        }
    } elseif ($custom == "" || $custom == null) {
        if (preg_replace($default, "", $string)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>