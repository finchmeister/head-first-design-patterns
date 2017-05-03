<?php


namespace StrategyPattern\Duck\Behaviour\Fly;


class FlyWithWings implements FlyBehaviourInterface
{

    public function fly(): void
    {
        echo "I'm flying!!".PHP_EOL;
    }

}