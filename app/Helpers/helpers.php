<?php

function formatLargeNumber($number)
{
    $suffix = '';

    if ($number >= 1000000000) {
        $number /= 1000000000;
        $suffix = 'b';
        return number_format($number, 1) . $suffix;
    } elseif ($number >= 1000000) {
        $number /= 1000000;
        $suffix = 'm';
        return number_format($number, 1) . $suffix;
    } elseif ($number >= 1000) {
        $number /= 1000;
        $suffix = 'k';
        return number_format($number, 1) . $suffix;
    }

    return number_format($number, 0) . $suffix;
}

