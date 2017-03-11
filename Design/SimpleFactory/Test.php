<?php

namespace Design\SimpleFactory;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function testInstance()
    {
        $product1 = ProductFactory::getInstance(5);

        $this->assertInstanceOf(IProduct::class, $product1);
        $product1->run();

        $product2 = ProductFactory::getInstance(20);
        $this->assertInstanceOf(IProduct::class, $product2);
        $product2->run();
    }


}