<?php
namespace DesignPattern\Creational\AbstractFactory;


class Product2Factory implements IProductFactory
{

    public static function getInstanceOdd($size)
    {
        return new Product3($size);
    }

    public static function getInstanceEven($size)
    {
        return new Product4($size);
    }
}