<?php

namespace Design\Factory;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function testInstance()
    {
        $product1 = Product1Factory::getInstance(10);

        $this->assertInstanceOf(IProduct::class, $product1);
        $product1->run();

        $product2 = Product2Factory::getInstance(10);
        $this->assertInstanceOf(IProduct::class, $product2);
        $product2->run();
    }

}