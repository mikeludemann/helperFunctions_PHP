<?php

function differentDatePeriod($startDate, $endDate)
{

    $date_diff = abs(strtotime($endDate) - strtotime($startDate));

    $years = floor($date_diff / (365 * 60 * 60 * 24));
    $months = floor(($date_diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($date_diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    $yearFormat = "";
    $monthFormat = "";
    $daysFormat = "";

    if ($years == 1) {
        $yearFormat .= "year";
    } else {
        $yearFormat .= "years";
    }

    if ($months == 1) {
        $monthFormat .= "month";
    } else {
        $monthFormat .= "months";
    }

    if ($days == 1) {
        $daysFormat .= "day";
    } else {
        $daysFormat .= "days";
    }

    printf("%d " . $yearFormat . ", %d " . $monthFormat . ", %d " . $daysFormat . "", $years, $months, $days);

}

?>