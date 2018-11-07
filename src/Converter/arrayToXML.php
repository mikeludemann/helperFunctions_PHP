<?php
function arrayToXML($array, $xml, $rootElement)
{
    if ($xml === false) {
        $xml = new SimpleXMLElement($rootElement);
    }

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayToXML($value, $xml->addChild($key), $rootElement);
        } else {
            $xml->addChild($key, $value);
        }
    }

    return $xml->asXML();
}
?>