<?php

namespace DesignPattern\Creational\Factory;


class Product2Factory implements IProductFactory
{
    public static function getInstance($size)
    {
        return new Product2($size);
    }

}