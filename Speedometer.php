
<?php

class Speedometer
{
    const CONVERSION = 1.609;

    public static function convertMilesToKm(int $distance): float
    {
        return round($distance * self::CONVERSION, 2);
    }

    public static function convertKMToMiles(int $distance): float
    {
        return round($distance / self::CONVERSION, 2);
    }
}