<?php


namespace DesignPatterns\Decorator;


abstract class CondimentDecoratorAbstract implements BeverageInterface
{

    abstract public function getDescription(): string;
}