<?php


namespace DesignPatterns\Observer;


class WeatherStation
{

    public static function main(array $args)
    {
        $weatherData = new WeatherData();

        // Instantiating Display and Observer implementing classes register the displays as observers
        new CurrentConditionsDisplay($weatherData);
        new StatisticsDisplay($weatherData);
        new ForecastDisplay($weatherData);
        new HeatIndexDisplay($weatherData);

        $weatherData->setMeasurements(30, 65, 30.4);
        $weatherData->setMeasurements(32, 50, 25);
        $weatherData->setMeasurements(23, 65, 22);
        $weatherData->setMeasurements(25, 65, 22);
    }
}