<?php
namespace Design\Creating\Builder;

/**
 *
 * Class CarBuilder
 * @package Design\Creating\Builder
 */
abstract class CarBuilder
{

    protected $car;


    public function __construct()
    {
        $this->car = new Car();
    }


    public abstract function buildHead();

    public abstract function buildEngine();

    public abstract function buildTyre();

    public abstract function getCar();

}