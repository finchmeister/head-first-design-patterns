<?php


namespace DesignPatterns\Decorator;


interface BeverageInterface
{
    public function getDescription(): string;

    public function cost(): float;
}