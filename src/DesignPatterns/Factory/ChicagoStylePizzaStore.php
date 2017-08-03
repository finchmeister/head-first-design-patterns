<?php


namespace DesignPatterns\Factory;


class ChicagoStylePizzaStore extends PizzaStoreAbstract
{

    public function createPizza(string $type): PizzaAbstract
    {
        if ($type === 'cheese') {
            return new ChicagoStyleCheesePizza();
        }
    }

}