<?php


namespace Duck;


class FlyNoWay implements FlyBehaviourInterface
{

    public function fly(): void
    {
        echo "I can't fly".PHP_EOL;
    }

}