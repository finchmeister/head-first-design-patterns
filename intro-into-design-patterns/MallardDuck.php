<?php


namespace Duck;

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