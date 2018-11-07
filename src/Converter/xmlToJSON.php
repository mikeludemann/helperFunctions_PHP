<?php

function xmlToJSON($xml)
{
    $a = dom_import_simplexml(simplexml_load_string($xml));
    $t = function ($v) {
        return $v->getAttribute('type');
    };
    $f = function ($f, $a) use ($t) {
        $c = null;
        if ($t($a) == 'null') {
            $c = null;
        } else if ($t($a) == 'boolean') {
            $b = substr(strtolower($a->textContent), 0, 1);
            $c = in_array($b, array('1', 't'));
        } else if ($t($a) == 'number') {
            $c = $a->textContent + 0;
        } else if ($t($a) == 'string') {
            $c = $a->textContent;
        } else if ($t($a) == 'object') {
            $c = array();
            if ($a->getAttribute('__type')) {
                $c['__type'] = $a->getAttribute('__type');
            }
            for ($i = 0; $i < $a->childNodes->length; $i++) {
                $v = $a->childNodes[$i];
                $c[$v->nodeName] = $f($f, $v);
            }
            $c = (object) $c;
        } else if ($t($a) == 'array') {
            $c = array();
            for ($i = 0; $i < $a->childNodes->length; $i++) {
                $v = $a->childNodes[$i];
                $c[$i] = $f($f, $v);
            }
        }
        return $c;
    };
    $c = $f($f, $a);
    return json_encode($c, 64);
}

?>