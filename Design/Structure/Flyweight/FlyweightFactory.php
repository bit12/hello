<?php
namespace Design\Structure\Flyweight;

/**
 * 享元工厂
 *
 * Class FlyweightFactory
 * @package Design\Structure\Flyweight
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