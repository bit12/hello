<?php

namespace Design\Creating\AbstractFactory;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function testInstance()
    {
        $this->assertInstanceOf(IProduct::class, Product1Factory::getInstanceOdd(10));
        $this->assertInstanceOf(IProduct::class, Product1Factory::getInstanceEven(10));
        $this->assertInstanceOf(IProduct::class, Product2Factory::getInstanceOdd(10));
        $this->assertInstanceOf(IProduct::class, Product2Factory::getInstanceEven(10));


        Product1Factory::getInstanceOdd(10)->run();
        Product1Factory::getInstanceEven(10)->run();
        Product2Factory::getInstanceOdd(10)->run();
        Product2Factory::getInstanceEven(10)->run();
    }


}