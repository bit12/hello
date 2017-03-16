<?php
namespace Design\AbstractFactory;


class Product1 implements IProduct
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function run()
    {
        print __CLASS__ . ':1 ' . PHP_EOL;

    }

}