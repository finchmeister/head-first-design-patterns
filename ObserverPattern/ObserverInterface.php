<?php


namespace ObserverPattern;


interface ObserverInterface
{
    public function update(float $temp, float $humidity, float $pressure): void;
}