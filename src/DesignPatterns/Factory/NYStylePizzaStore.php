<?php


namespace DesignPatterns\Factory;


class NYStylePizzaStore extends PizzaStoreAbstract
{

    public function createPizza(string $type): PizzaAbstract
    {
        if ($type === 'cheese') {
            return new NYStyleCheesePizza();
        }
    }

}