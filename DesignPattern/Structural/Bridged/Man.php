<?php
namespace DesignPattern\Structure\Bridged;

/**
 * 具体实现化角色
 *
 * Class Man
 * @package DesignPattern\Structure\Bridged
 */
class Man implements IPeople
{

    public function buy()
    {
        print '男生购物';
    }
}