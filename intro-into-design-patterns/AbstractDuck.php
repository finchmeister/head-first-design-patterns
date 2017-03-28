<?php


namespace Duck;

abstract class AbstractDuck
{
    /** @var FlyBehaviourInterface */
    public $flyBehaviour;
    /** @var QuackBehaviourInterface */
    public $quackBehaviour;

    abstract public function display(): void;

    public function performFly(): void
    {
        $this->flyBehaviour->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehaviour->quack();
    }

    public function swim(): void
    {
        echo "All ducks float, even decoys!".PHP_EOL;
    }
}