<?php
function isAllowFileType($ignoreMimeType = false, $arrayWithTypes, $errorMessage)
{
    if ($this->allowed_types == '*') {
        return true;
    }

    if (count($this->allowed_types) == 0 or !is_array($this->allowed_types)) {
        $this->set_error($errorMessage);
        return false;
    }

    $extension = strtolower(ltrim($this->file_ext, '.'));

    if (!in_array($extension, $this->allowed_types)) {
        return false;
    }

    $fileTypes = array('gif', 'jpg', 'jpeg', 'png', 'jpe');

    if (in_array($extension, $fileTypes)) {
        if (getimagesize($this->file_temp) === false) {
            return false;
        }
    }

    if ($ignoreMimeType === true) {
        return true;
    }

    $mime = $this->mimes_types($extension);

    if (is_array($mime)) {
        if (in_array($this->file_type, $mime, true)) {
            return true;
        }
    } elseif ($mime == $this->file_type) {
        return true;
    }

    return false;
}
?>