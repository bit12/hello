<?php
namespace Design\Creating\AbstractFactory;


class Product1Factory implements IProductFactory
{

    public static function getInstanceOdd($size)
    {
        return new Product1($size);
    }

    public static function getInstanceEven($size)
    {
        return new Product2($size);
    }
}