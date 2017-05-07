<?php


namespace DesignPatterns\Observer;


class StatisticsDisplay implements ObserverInterface, DisplayInterface
{

    /** @var float */
    private $maxTemp = 0;

    /** @var float */
    private $minTemp = 200;

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
        echo sprintf(
            "Avg/Min/Max temperature = %s/%s/%s\n",
            $this->tempSum/$this->noOfReadings,
            $this->minTemp,
            $this->maxTemp
        );
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->noOfReadings++;
        $this->tempSum += $temp;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->display();
    }


}