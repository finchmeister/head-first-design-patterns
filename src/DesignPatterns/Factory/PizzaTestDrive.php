<?php


namespace DesignPatterns\Factory;


use System\System;

class PizzaTestDrive
{

    public static function main(): void
    {
        $nyStore = new NYStylePizzaStore();
        $chicagoStore = new ChicagoStylePizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        System::printLn("Bob ordered a " . $pizza->getName() . " pizza" . PHP_EOL);

        $pizza = $chicagoStore->orderPizza('cheese');
        System::printLn("Steve ordered a " . $pizza->getName() . " pizza" . PHP_EOL);
    }

}