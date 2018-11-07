<?php

function getHashPassword($password)
{
    return password_hash($password, PASSWORD_BCRYPT);
}

function isPassword($password, $cryptedPassword)
{
    return password_verify($password, $cryptedPassword);
}

?>