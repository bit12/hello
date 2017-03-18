<?php
namespace DesignPattern\Structure\Bridged;

/**
 * 抽象化角色
 *
 * Class AbstractMarket
 * @package DesignPattern\Structure\Bridged
 */
abstract class AbstractMarket
{

    public $iPeople;


    public function __construct(IPeople $iPeople)
    {
        $this->iPeople = $iPeople;
    }

    abstract function sell();


}