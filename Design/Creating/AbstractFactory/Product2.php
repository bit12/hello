<?php
namespace Design\AbstractFactory;


class Product2 implements IProduct
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function run()
    {
        print __CLASS__ . ':2 ' .  PHP_EOL;

    }

}