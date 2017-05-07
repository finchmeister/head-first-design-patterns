<?php


namespace DesignPatterns\Observer;


class WeatherData implements SubjectInterface
{
    /** @var ObserverInterface[] */
    public $observers;

    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    /** @var float */
    private $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(ObserverInterface $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(ObserverInterface $o): void
    {
        foreach ($this->observers as $i => $observer) {
            if ($o === $observer) {
                unset($this->observers[$i]);
            }
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(
        float $temp,
        float $humidity,
        float $pressure
    ): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }


}