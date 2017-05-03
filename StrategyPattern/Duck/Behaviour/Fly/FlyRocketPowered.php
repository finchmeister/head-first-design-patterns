<?php


namespace StrategyPattern\Duck\Behaviour\Fly;


class FlyRocketPowered implements FlyBehaviourInterface
{

    public function fly(): void
    {
        echo "I'm flying with a rocket".PHP_EOL;
    }

}