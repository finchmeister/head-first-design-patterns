<?php


namespace DesignPatterns\Strategy\Duck\Ducks;

use DesignPatterns\Strategy\Duck\Behaviour\Fly\FlyNoWay;
use DesignPatterns\Strategy\Duck\Behaviour\Fly\FlyWithWings;
use DesignPatterns\Strategy\Duck\Behaviour\Quack\Quack;

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