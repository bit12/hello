<?php
namespace DesignPattern\Behavioral\Strategy;


use PHPUnit\Framework\TestCase;


class Test extends TestCase
{


    public function test()
    {
        print PHP_EOL;

        $sky = new Sky();
        $this->assertTrue(is_callable([$sky, 'fly']));

        $sky->setAnimal((new Bird()));
        print $sky->fly();

        print PHP_EOL;
        $sky->setAnimal((new Chicken()));
        print $sky->fly();

    }

}