<?php


namespace StrategyPattern\Duck\Ducks;

use StrategyPattern\Duck\Behaviour\Fly\FlyBehaviourInterface;
use StrategyPattern\Duck\Behaviour\Quack\QuackBehaviourInterface;

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

    public function setFlyBehaviour(FlyBehaviourInterface $fb): void
    {
        $this->flyBehaviour = $fb;
    }

    public function setQuackBehaviour(QuackBehaviourInterface $qb): void
    {
        $this->quackBehaviour = $qb;
    }
}