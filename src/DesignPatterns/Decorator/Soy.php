<?php


namespace DesignPatterns\Decorator;


class Soy extends CondimentDecoratorAbstract
{
    protected $beverage;

    public function __construct(BeverageInterface $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.15;
    }
}