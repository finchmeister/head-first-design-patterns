<?php


namespace DesignPatterns\Decorator;


class StarbuzzCoffee
{

    public static function main($args = [])
    {
        $beverage = new Espresso();
        self::displayBeverage($beverage);

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        self::displayBeverage($beverage2);

        $beverage3 = new HouseBlend();
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        self::displayBeverage($beverage3);
    }

    protected static function displayBeverage(BeverageInterface $beverage)
    {
        echo $beverage->getDescription() . " $" . $beverage->cost() . "\n";
    }
}