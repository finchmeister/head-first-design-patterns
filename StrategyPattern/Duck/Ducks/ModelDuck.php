<?php


namespace StrategyPattern\Duck\Ducks;

use StrategyPattern\Duck\Behaviour\Fly\FlyNoWay;
use StrategyPattern\Duck\Behaviour\Fly\FlyWithWings;
use StrategyPattern\Duck\Behaviour\Quack\Quack;

class ModelDuck extends AbstractDuck
{

    public function __construct()
    {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehaviour = new Quack();
    }

    public function display(): void
    {
        echo "I'm a model duck".PHP_EOL;
    }

}