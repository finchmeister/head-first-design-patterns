<?php

namespace StrategyPattern;

use StrategyPattern\Duck\Behaviour\Fly\FlyRocketPowered;
use StrategyPattern\Duck\Ducks\MallardDuck;
use StrategyPattern\Duck\Ducks\ModelDuck;

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