<?php


namespace Duck;


class FlyWithWings implements FlyBehaviourInterface
{

    public function fly(): void
    {
        echo "I'm flying!!".PHP_EOL;
    }

}