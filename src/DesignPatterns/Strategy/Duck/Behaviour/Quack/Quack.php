<?php


namespace DesignPatterns\Strategy\Duck\Behaviour\Quack;


class Quack implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "Quack".PHP_EOL;
    }

}