<?php
function isImage($file)
{
    $data = getimagesize($file);

    if (is_array($data) && strpos($data['mime'], 'image') !== false) {
        return true;
    } else {
        return false;
    }
}
?>