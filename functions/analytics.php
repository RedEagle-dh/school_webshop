<?php

function getAlltimeEarnings()
{
    $sql = "SELECT SUM(jan22+ feb22+ mar22+ apr22+ mai22+ jun22+ jul22+ aug22+ sep22+ okt22+ nov22+ dez22) FROM analytics WHERE analyticid = 1;";
    $result = db_query($sql);
    $r = mysqli_fetch_column($result);
    return $r;
}

function getMonthlyEarnings($month)
{
    $sql = "SELECT $month FROM analytics WHERE analyticid = 1;";
    $result = db_query($sql);
    $r = mysqli_fetch_column($result);
    return $r;
}

function getActualMonth()
{
    $month = date('m');
    switch ($month) {
        case 1:
            return "jan22";
        case 2:
            return "feb22";
        case 3:
            return "mar22";
        case 4:
            return "apr22";
        case 5:
            return "mai22";
        case 6:
            return "jun22";
        case 7:
            return "jul22";
        case 8:
            return "aug22";
        case 9:
            return "sep22";
        case 10:
            return "okt22";
        case 11:
            return "nov22";
        case 12:
            return "dez22";
    }
}
