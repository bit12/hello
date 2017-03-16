<?php

namespace Design\Factory;


class Product2  implements IProduct
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function run()
    {
        print __CLASS__ .  PHP_EOL;
    }

}