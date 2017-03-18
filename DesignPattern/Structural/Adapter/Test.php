<?php
namespace DesignPattern\Structural\Adapter;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testChinese()
    {
        $chinese = new ChinesePlayer();

        $adapter = new Adapter();

        $this->assertEquals($chinese->pao(), $adapter->run());
        $this->assertEquals($chinese->tiao(), $adapter->jump());
    }



}