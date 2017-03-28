<?php


namespace Duck;


class MuteQuack implements QuackBehaviourInterface
{
    public function fly(): void
    {
        echo "<< Silence >>".PHP_EOL;
    }

}