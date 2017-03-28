<?php

namespace Duck;

class MiniDuckSimulator {

    public static function main() : void
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();
    }
}