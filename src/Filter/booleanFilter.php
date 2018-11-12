<?php
function booleanFilter($input)
{
    return (filter_var($input, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) ? "true" : "false";
}
?>