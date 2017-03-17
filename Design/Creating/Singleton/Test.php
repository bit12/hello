<?php
namespace Design\Creating\Singleton;


use PHPUnit\Framework\Error\Error;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @expectedException Error
     */
    public function testConstruct()
    {
       return new Singleton();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(Singleton::class, Singleton::getInstance());
    }

    /**
     * @expectedException PHPUnit\Framework\Error\Error
     */
    public function testClone()
    {
         return clone Singleton::getInstance();
    }



}