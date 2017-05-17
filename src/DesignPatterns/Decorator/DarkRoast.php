<?php


namespace DesignPatterns\Decorator;


class DarkRoast extends BeverageAbstract
{

    public function __construct()
    {
        $this->description = "Dark Roast Coffee";
    }

    public function cost(): float
    {
        return 0.99;
    }
}