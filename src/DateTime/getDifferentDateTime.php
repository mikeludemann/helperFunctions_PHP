<?php
function getDifferentDateTime($startDate, $endDate)
{
    $firstDate = new DateTime($startDate);
    $secondDate = $firstDate->diff(new DateTime($endDate));

    $year = $secondDate->y;
    $month = $secondDate->m;
    $day = $secondDate->d;
    $hour = $secondDate->h;
    $minute = $secondDate->i;
    $second = $secondDate->s;

    $yearFormat = "";
    $monthFormat = "";
    $daysFormat = "";
    $hoursFormat = "";
    $minutesFormat = "";
    $secondsFormat = "";

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

    if ($hour == 1) {
        $hoursFormat .= "hour";
    } else {
        $hoursFormat .= "hours";
    }

    if ($minute == 1) {
        $minutesFormat .= "minute";
    } else {
        $minutesFormat .= "minutes";
    }

    if ($second == 1) {
        $secondsFormat .= "second";
    } else {
        $secondsFormat .= "seconds";
    }

    printf("%d " . $yearFormat . ", %d " . $monthFormat . ", %d " . $daysFormat . ", %d " . $hoursFormat . ", %d " . $minutesFormat . ", %d " . $secondsFormat, $year, $month, $day, $hour, $minute, $second);
}
?>