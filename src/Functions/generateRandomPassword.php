<?php

function generateRandomPassword($uppercase, $lowercase, $numeric, $specialCharacter)
{
    $generatePassword = array();
    $password = '';

    for ($i = 0; $i < $uppercase; $i++) {
        $generatePassword[] = chr(rand(65, 90));
    }

    for ($i = 0; $i < $lowercase; $i++) {
        $generatePassword[] = chr(rand(97, 122));
    }

    for ($i = 0; $i < $numeric; $i++) {
        $generatePassword[] = chr(rand(48, 57));
    }

    for ($i = 0; $i < $specialCharacter; $i++) {
        $generatePassword[] = chr(rand(33, 47));
    }

    shuffle($generatePassword);

    foreach ($generatePassword as $character) {
        $password .= $character;
    }

    return $password;

}

?>