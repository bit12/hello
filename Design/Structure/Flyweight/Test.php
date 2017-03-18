<?php


namespace Design\Structure\Flyweight;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function getFactory()
    {
        return [
            [new FlyweightFactory()]
        ];
    }

    /**
     * @dataProvider getFactory
     */
    public function testConcrete(FlyweightFactory $factory)
    {
        $this->assertSame($factory->getFlyweight(1000), $factory->getFlyweight(1000));
        $this->assertEquals($factory->getFlyweight(1000)->show(), 2000);
        $this->assertEquals($factory->getFlyweight(1000)->show(), 3000);
    }

    /**
     * @dataProvider getFactory
     */
    public function testUnshared()
    {
        $this->assertEquals((new UnsharedConcreteFlyweight(2000))->show(), 2000);
    }


}