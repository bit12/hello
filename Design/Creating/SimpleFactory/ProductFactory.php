<?php
namespace Design\Creating\SimpleFactory;

/**
 * 工厂角色：简单工厂模式所创建的所有对象的父类，它负责描述所有实例所共有的公共接口
 *
 * Class ProductFactory
 */
class ProductFactory
{

    public static function  getInstance($size)
    {
        if ($size < 10) {
            return (new Product1($size));
        } else {
            return (new Product2($size));
        }
    }

}