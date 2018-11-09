<?php
function convertDateTime($alt, $new, $date)
{
    $dt = DateTime::createFromFormat($alt, $date)->format($new);

    return $dt;
}
?>