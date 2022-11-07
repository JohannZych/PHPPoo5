<?php

class Speedometer
{
    public const KMTOMILES = 1.621;
    public const MILESTOKM = 0.619;

    public static function convertKmToMiles($speed): float
    {
        return $speed*self::KMTOMILES;
    }

    public static function convertMilesToKm($speed): float
    {
        return $speed*self::MILESTOKM;
    }
}