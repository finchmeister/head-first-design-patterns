<?php


namespace ObserverPattern;


class WeatherStation
{

    public static function main(array $args)
    {
        $weatherData = new WeatherData();

        $currentDisplay = new CurrentConditionDisplay($weatherData);
        // TODO implement

        $weatherData->setMeasurements(30, 65, 30.4);
    }
}