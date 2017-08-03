<?php


namespace DesignPatterns\Factory;


use System\System;

class ChicagoStyleCheesePizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->setName("Chicago Style Deep Dish Cheese Pizza");
        $this->setDough("Extra Thick Crust Dough");
        $this->setName("Plum Tomato Sauce");

        $this->addTopping("Shredded Mozzarella Cheese");
    }

    public function cut(): void
    {
        System::printLn("Cutting the pizza into square slices");
    }
}