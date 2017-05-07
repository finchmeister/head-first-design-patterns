<?php


namespace DesignPatterns\Strategy\Duck\Ducks;

use DesignPatterns\Strategy\Duck\Behaviour\Fly\FlyWithWings;
use DesignPatterns\Strategy\Duck\Behaviour\Quack\Quack;

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