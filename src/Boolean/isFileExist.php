<?php

function isFileExist($file)
{
    if (!file_exists($file)) {
        return false;
    }
    return isValid(file_get_contents($file));
}

?>