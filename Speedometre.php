<?php


class Speedometre
{
    const convert = 0.621;

    public static function convertKmOnMiles(int $param)
    {
        return round($param * self::convert, 2) . "Miles";
    }


    public static function convertMilesOnKm(int $param)
    {
        return round($param / self::convert) . "Km";
    }
}