<?php
namespace DesignPattern\Creational\Builder;

/**
 * 指挥者
 *
 * Class Director
 * @package DesignPattern\Creational\Builder
 */
class Director
{
    /**
     * @var CarBuilder
     */
    protected $builder;

    /**
     *
     * Director constructor.
     * @param CarBuilder $builder
     */
    public function __construct(CarBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     *
     * @return mixed
     */
    public function getCar()
    {
        $this->builder->buildHead();
        $this->builder->buildEngine();
        $this->builder->buildTyre();

        return $this->builder->getCar();
    }


}
