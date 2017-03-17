<?php
namespace Design\Creating\AbstractFactory;


class Product4 implements IProduct
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function run()
    {
        print __CLASS__ . ':4 ' . PHP_EOL;
    }

}