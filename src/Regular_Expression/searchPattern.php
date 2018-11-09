<?php
function searchPattern($string, $pattern)
{
    $default = '/[^a-zA-Z0-9]/';
    $custom = $pattern;
    
    if ($custom != "" || $custom != null) {
        if (preg_match($custom, $string)) {
            return true;
        } else {
            return false;
        }
    } elseif ($custom == "" || $custom == null) {
        if (preg_match($default, $string)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>