<?php


namespace DesignPatterns\Strategy\Duck\Behaviour\Quack;


class MuteQuack implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "<< Silence >>".PHP_EOL;
    }

}