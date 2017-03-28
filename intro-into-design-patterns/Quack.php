<?php


namespace Duck;


class Quack implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "Quack".PHP_EOL;
    }

}