<?php


namespace DesignPatterns\Observer;


class ForecastDisplay implements ObserverInterface, DisplayInterface
{

    /** @var float */
    private $currentPressure;

    /** @var float */
    private $lastPressure;

    /** @var float */
    private $tempSum = 0;

    /** @var int */
    private $noOfReadings;

    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }


    public function display(): void
    {
        if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!\n";
        } elseif ($this->currentPressure === $this->lastPressure) {
            echo "More of the same\n";
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo "Watch out, cooler rainier weather\n";
        }
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }


}