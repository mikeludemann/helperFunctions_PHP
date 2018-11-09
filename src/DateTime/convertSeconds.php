<?php
function convertSeconds($seconds)
{
    $startDate = new DateTime("@0");
    $endDate = new DateTime("@$seconds");

    return $startDate->diff($endDate)->format('%a day(s) %h hour(s) %i minute(s) and %s second(s');
}
?>