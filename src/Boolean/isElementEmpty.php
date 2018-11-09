<?php
function isElementEmpty($element)
{
    if (empty($element)) {
        return true;
    } else if (is_numeric($element)) {
        return false;
    } else if (is_string($element)) {
        return !strlen(trim($element));
    } else if (is_object($element)) {
        return functionallyEmpty((array) $element);

    }

    foreach ($element as $element) {
        if (isEmpty($element)) {
            continue;
        } else {
            return false;
        }
    }

    return true;
}
?>