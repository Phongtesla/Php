<?php
function currency_format($number, $unit = 'VNĐ')
{
    return number_format($number) . ' ' . $unit;
}
