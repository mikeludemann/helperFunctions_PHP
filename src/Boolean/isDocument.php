<?php
function isDocument($filename, $arrayFileTypes)
{
    $allowedExtensions = $arrayFileTypes;
    $extension = end(explode(".", $_FILES[$filename]["name"]));

    if (in_array($extension, $allowedExtensions)) {
        if ($_FILES[$filename]["error"] > 0) {
            return $_FILES[$filename]["error"] . "\n";
        } else {
            return true;
        }
    }
}
?>