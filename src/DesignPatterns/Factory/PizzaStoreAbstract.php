<?php


namespace DesignPatterns\Factory;


abstract class PizzaStoreAbstract
{

    /**
     * @param string $type
     * @return PizzaAbstract
     */
    public function orderPizza(string $type): PizzaAbstract
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * @param string $type
     * @return PizzaAbstract
     */
    abstract function createPizza(string $type): PizzaAbstract;
}