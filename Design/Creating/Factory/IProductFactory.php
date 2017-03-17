<?php
namespace Design\Creating\Factory;

/**
 * 将创建对象抽象为一个接口
 * 这里是简单工厂本质区别所在，将对象的创建抽象成一个接口。
 *
 * Interface ProductFactory
 * @package Design\Creating\Factory
 */
interface IProductFactory
{

    public static function  getInstance($size);

}