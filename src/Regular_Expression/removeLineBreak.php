<?php
function removeLineBreak($string, $pattern)
{
    $default = '/\s+/';
    $custom = $pattern;

    if ($custom != "" || $custom != null) {
        if (preg_replace($custom, "", trim($string))) {
            return true;
        } else {
            return false;
        }
    } elseif ($custom == "" || $custom == null) {
        if (preg_replace($default, "", trim($string))) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>