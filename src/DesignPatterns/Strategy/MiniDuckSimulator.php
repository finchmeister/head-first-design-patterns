<?php

namespace DesignPatterns\Strategy;

use DesignPatterns\Strategy\Duck\Behaviour\Fly\FlyRocketPowered;
use DesignPatterns\Strategy\Duck\Ducks\MallardDuck;
use DesignPatterns\Strategy\Duck\Ducks\ModelDuck;

class MiniDuckSimulator
{

    public static function main() : void
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();

        // Change the fly behaviour during runtime
        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehaviour(new FlyRocketPowered());
        $model->performFly();
    }
}