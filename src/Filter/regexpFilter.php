<?php
function regexpFilter($input, $regexp)
{
    return filter_var($input, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexp))) ? "true" : "false";
}
?>