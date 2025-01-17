<?php
session_start();

function formatDate($startDate, $endDate)
{
    $startdate = new DateTime($startDate);
    $endDate = new DateTime($endDate);
    $formatstart = $startdate->format('F d -');
    $formatend = $endDate->format(' d, Y');
    return $formatstart . $formatend;
}

function pagination($totalpages)
{

    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $currentPage = max(1, min($_GET['page'], $totalpages));
    } else {
        $currentPage = 1;
    }
    return $currentPage;
}
