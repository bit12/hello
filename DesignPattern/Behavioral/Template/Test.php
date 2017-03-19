<?php
namespace DesignPattern\Behavioral\Template;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{


    public function test()
    {
        print PHP_EOL;
        (new MakeH5())->make();
    }

}