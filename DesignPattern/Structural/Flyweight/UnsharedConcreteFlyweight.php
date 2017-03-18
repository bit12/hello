<?php
namespace DesignPattern\Structure\Flyweight;

/**
 * 不共享的具体享元角色
 *
 * Class UnsharedConcreteFlyweight
 * @package DesignPattern\Structure\Flyweight
 */
class UnsharedConcreteFlyweight implements IFlyweight
{

    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }


    public function show()
    {
        return $this->state;
    }

}