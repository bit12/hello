<?php
namespace DesignPattern\Creational\AbstractFactory;


class Product3 implements IProduct
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function run()
    {
        print __CLASS__ . ':3 ' . PHP_EOL;

    }

}