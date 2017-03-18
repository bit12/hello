<?php
namespace DesignPattern\Creational\Factory;

/**
 * Interface IProduct
 *
 * 抽象产品（IProduct）角色：简单工厂模式所创建的所有对象的父类，它负责描述所有实例所共有的公共接口
 */
interface IProduct
{
    /**
     *
     * @return mixed
     */
    public function run();
}