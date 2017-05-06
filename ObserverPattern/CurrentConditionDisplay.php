<?php


namespace ObserverPattern;


class CurrentConditionDisplay implements ObserverInterface, DisplayInterface
{

    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    private $weatherData;

    public function currentConditionsDisplay(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }


    public function display(): void
    {
        echo sprintf(
            "Current conditions: %sc degrees and %s%% humidity",
            $this->temperature,
            $this->humidity
        );
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }


}