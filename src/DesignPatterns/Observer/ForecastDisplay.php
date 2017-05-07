<?php


namespace DesignPatterns\Observer;


class ForecastDisplay implements ObserverInterface, DisplayInterface
{

    /** @var float */
    private $currentPressure;

    /** @var float */
    private $lastPressure;

    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display(): void
    {
        if ($this->currentPressure > $this->lastPressure) {
            $message = "Improving weather on the way!";
        } elseif ($this->currentPressure === $this->lastPressure) {
            $message = "More of the same";
        } elseif ($this->currentPressure < $this->lastPressure) {
            $message = "Watch out, cooler rainier weather";
        }
        echo "Forecast: $message\n";
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }


}