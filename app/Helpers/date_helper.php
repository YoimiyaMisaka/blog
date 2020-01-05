<?php

if ( ! function_exists('date_insert_string')) {
    function date_insert_string()
    {
        return date('Y-m-d H:i:s');
    }
}

if ( ! function_exists('date_random_range')) {
    function date_random_range($year1,$year2,$month1=1,$month2=12,$day1=1,$day2=31,$hour1=1,$hour2=24,$min1=0,$min2=59,$sec1=0,$sec2=59)
    {
        $year = rand($year1, $year2);
        $month = rand($month1, $month2);
        $day = rand($day1, $day2);
        $hour = rand($hour1, $hour2);
        $min = rand($min1, $min2);
        $sec = rand($sec1, $sec2);
        return "{$year}-{$month}-{$day} {$hour}:{$min}:{$sec}";
    }
}

if ( ! function_exists('date_random_string')) {
    function date_random_string()
    {
        return date('YmdHis').rand(1000, 9999);
    }
}