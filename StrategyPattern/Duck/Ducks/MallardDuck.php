<?php


namespace StrategyPattern\Duck\Ducks;

use StrategyPattern\Duck\Behaviour\Fly\FlyWithWings;
use StrategyPattern\Duck\Behaviour\Quack\Quack;

class MallardDuck extends AbstractDuck
{

    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehaviour = new Quack();
    }

    public function display(): void
    {
        echo "I'm a real Mallard duck".PHP_EOL;
    }

}