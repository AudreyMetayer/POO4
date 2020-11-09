<?php


class Speedometer extends Vehicle
{

    const CONVERSION = 0.62137119223733;

    public static function convertKmToMile($km)
    {
        $kmToMiles = $km * self::CONVERSION;
        return round($kmToMiles, 2);

    }
    public static function convertMileToKm($miles)
    {
        $mileToKm = $miles / self::CONVERSION;
        return round($mileToKm, 2);

    }

}

