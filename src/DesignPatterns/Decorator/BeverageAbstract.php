<?php


namespace DesignPatterns\Decorator;


abstract class BeverageAbstract implements BeverageInterface
{
    /** @var  string */
    protected $description = "Unknown Beverage";

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}