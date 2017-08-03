<?php


namespace DesignPatterns\Factory;


use System\System;

abstract class PizzaAbstract
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $dough;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var array
     */
    protected $toppings = [];

    public function prepare(): void
    {
        System::printLn("Preparing " . $this->name);
        System::printLn("Tossing dough... ");
        System::printLn("Adding sauce...");
        System::printLn("Adding topping...");
        foreach ($this->toppings as $topping) {
            System::printLn("   " . $topping);
        }
    }

    public function bake(): void
    {
        System::printLn("Bake for 25 minutes at 200");
    }

    public function cut(): void
    {
        System::printLn("Cutting the pizza into diagonal slices");
    }

    public function box(): void
    {
        System::printLn("Place the pizza in official PizzaStore box");
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDough(): string
    {
        return $this->dough;
    }

    /**
     * @param string $dough
     */
    public function setDough(string $dough)
    {
        $this->dough = $dough;
    }

    /**
     * @return string
     */
    public function getSauce(): string
    {
        return $this->sauce;
    }

    /**
     * @param string $sauce
     */
    public function setSauce(string $sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @return array
     */
    public function getToppings(): array
    {
        return $this->toppings;
    }

    /**
     * @param array $toppings
     */
    public function setToppings(array $toppings)
    {
        $this->toppings = $toppings;
    }

    /**
     * @param string $topping
     * @return array
     */
    public function addTopping(string $topping)
    {
        $this->toppings[] = $topping;
    }

}