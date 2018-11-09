<?php
function getCurrentAge($birthday)
{
    $bday = new DateTime($birthday);
    $today = new Datetime(date('m.d.y'));

    $diff = $today->diff($bday);

    $year = $diff->y;
    $month = $diff->m;
    $day = $diff->d;

    $yearFormat = "";
    $monthFormat = "";
    $daysFormat = "";

    if ($year == 1) {
        $yearFormat .= "year";
    } else {
        $yearFormat .= "years";
    }

    if ($month == 1) {
        $monthFormat .= "month";
    } else {
        $monthFormat .= "months";
    }

    if ($day == 1) {
        $daysFormat .= "day";
    } else {
        $daysFormat .= "days";
    }

    printf("%d " . $yearFormat . " %d " . $monthFormat . "%d " . $daysFormat, $year, $month, $day);
}
?>