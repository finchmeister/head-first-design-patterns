<?php


namespace StrategyPattern\Duck\Behaviour\Quack;


class Squeak implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "Squeak".PHP_EOL;
    }

}