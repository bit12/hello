<?php
namespace DesignPattern\Creational\Builder;

/**
 *
 * Class CarBuilder
 * @package DesignPattern\Creational\Builder
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