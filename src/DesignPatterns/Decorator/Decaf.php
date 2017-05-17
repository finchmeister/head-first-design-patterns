<?php


namespace DesignPatterns\Decorator;


class Decaf extends BeverageAbstract
{

    public function __construct()
    {
        $this->description = "Decaf";
    }

    public function cost(): float
    {
        return 1.05;
    }
}