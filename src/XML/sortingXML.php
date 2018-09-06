<?php

$xml = new SimpleXMLElement($xml_string);
$data = array();

$key = 0;
foreach ($xml as $group) {
    foreach ($group as $name => $entry) {
        $data[$key][$name] = (string) $entry;
    }

    $key++;
}

// Printing results with sort functions

usort($data, 'sortBy');
print_r($data);

sort($data);
print_r($data);

// Helper Functions

function sortBy($a, $b)
{
    return $a['lastname'] > $b['lastname'];
}
?>