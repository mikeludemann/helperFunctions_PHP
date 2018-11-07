<?php

function isValidFile($file)
{
    if (!is_file($file)) {
        return false;
    }
    return isValid(file_get_contents($file));
}

?>