<?php
namespace DesignPattern\Structure\Flyweight;

/**
 * 享元工厂
 *
 * Class FlyweightFactory
 * @package DesignPattern\Structure\Flyweight
 */
class FlyweightFactory
{
    private $flyweights = [];

    /**
     *
     *
     * @param $state
     * @return ConcreteFlyweight
     */
    public function getFlyweight($state)
    {
        if (! isset($this->flyweights[$state])) {
            $this->flyweights[$state] = new ConcreteFlyweight($state);
        }

        return $this->flyweights[$state];
    }


}