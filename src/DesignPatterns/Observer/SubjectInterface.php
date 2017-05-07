<?php


namespace DesignPatterns\Observer;


interface SubjectInterface
{
    public function registerObserver(ObserverInterface $o): void;
    public function removeObserver(ObserverInterface $o): void;
    public function notifyObservers(): void;
}