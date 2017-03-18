<?php
namespace DesignPattern\Structure\Bridged;

/**
 * 修正抽象化角色
 *
 * Class Ali
 * @package DesignPattern\Structure\Bridged
 */
class Ali extends AbstractMarket
{
    function sell()
    {
        print PHP_EOL;

        print '淘宝: ';

        $this->iPeople->buy();

        print PHP_EOL;
    }

}