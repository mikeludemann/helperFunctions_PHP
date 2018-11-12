<?php
function emailFilter($email)
{
    $remove = filter_var($email, FILTER_SANITIZE_EMAIL);
    $result = filter_var($remove, FILTER_VALIDATE_EMAIL);

    return ($result) ? "true" : "false";
}
?>