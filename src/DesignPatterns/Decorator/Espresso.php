<?php


namespace DesignPatterns\Decorator;


class Espresso extends BeverageAbstract
{

    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function cost(): float
    {
        return 1.99;
    }
}