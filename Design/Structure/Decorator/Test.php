<?php
namespace Design\Structure\Decorator;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function test()
    {
        print PHP_EOL;

        $dog = new dog();

        $bite = new Bite();
        $collide = new Collide();


        $bite->decorate($dog);
        $collide->decorate($bite);


        $collide->warning();


    }

}