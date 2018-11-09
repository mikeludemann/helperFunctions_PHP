<?php
function weeksBetweenDates($startDate, $endDate)
{
    $first = DateTime::createFromFormat('m/d/Y', $startDate);
    $second = DateTime::createFromFormat('m/d/Y', $endDate);
    if ($startDate > $endDate) {
        return weeksBetweenDates($endDate, $startDate);
    }

    return floor($first->diff($second)->days / 7);
}
?>