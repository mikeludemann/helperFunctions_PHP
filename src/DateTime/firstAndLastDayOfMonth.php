<?php
function firstAndLastDayOfMonth($date)
{
    return date("Y-m-01", strtotime($date)) . "\n" . date("Y-m-t", strtotime($date));
}
?>