<?php

function isEmail($email)
{
    return (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) ? true : false;
}

?>