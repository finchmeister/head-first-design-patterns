<?php


namespace Duck;


class Squeak implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "Squeak".PHP_EOL;
    }

}