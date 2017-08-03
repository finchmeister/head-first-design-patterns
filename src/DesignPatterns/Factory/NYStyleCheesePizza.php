<?php


namespace DesignPatterns\Factory;


class NYStyleCheesePizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->setName("NY Style Sauce and Cheese Pizza");
        $this->setDough("Thin Crust Dough");
        $this->setName("Marinara Sauce");

        $this->addTopping("Grated Reggaino Cheese");
    }
}