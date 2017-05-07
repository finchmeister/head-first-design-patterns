<?php


namespace DesignPatterns\Observer;


class CurrentConditionsDisplay implements ObserverInterface, DisplayInterface
{

    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }


    public function display(): void
    {
        echo sprintf(
            "Current conditions: %sc degrees and %s%% humidity\n",
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