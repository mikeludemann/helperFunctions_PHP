<?php
function hyphenize($string)
{
    $dict = array(
        "I'm" => "I am",
    );
    return strtolower(preg_replace(array('#[\\s-]+#', '#[^A-Za-z0-9\. -]+#'), array(' ', ''), cleanString(str_replace(array_keys($dict), array_values($dict), urldecode($string)))));
}

function cleanString($text)
{
    $validateElements = array(
        '/[áàâãªä]/u' => 'a',
        '/[ÁÀÂÃÄ]/u' => 'A',
        '/[ÍÌÎÏ]/u' => 'I',
        '/[íìîï]/u' => 'i',
        '/[éèêë]/u' => 'e',
        '/[ÉÈÊË]/u' => 'E',
        '/[óòôõºö]/u' => 'o',
        '/[ÓÒÔÕÖ]/u' => 'O',
        '/[úùûü]/u' => 'u',
        '/[ÚÙÛÜ]/u' => 'U',
        '/ç/' => 'c',
        '/Ç/' => 'C',
        '/ñ/' => 'n',
        '/Ñ/' => 'N',
        '/–/' => '-',
        '/[’‘‹›‚]/u' => ' ',
        '/[“”«»„]/u' => ' ',
        '/ /' => ' ',
    );
    return preg_replace(array_keys($validateElements), array_values($validateElements), $text);
}
?>