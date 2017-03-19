<?php


namespace DesignPattern\Behavioral\State;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        print PHP_EOL;
        $onOff = new OnOff();

        $onOff->operation();
        $onOff->operation();
        $onOff->operation();
        $onOff->operation();
        $onOff->operation();
    }

}