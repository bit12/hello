<?php
namespace DesignPattern\Creational\Builder;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function testBWM()
    {
        $bwmBuilder = new BMW();
        $this->assertInstanceOf(CarBuilder::class, $bwmBuilder);

        $bwm = (new Director($bwmBuilder))->getCar();
        $this->assertInstanceOf(Car::class, $bwm);

        print PHP_EOL;
        $bwm->show();
    }



    public function testVolvo()
    {
        $volvoBuilder = new Volvo();
        $this->assertInstanceOf(CarBuilder::class, $volvoBuilder);

        $volvo = (new Director($volvoBuilder))->getCar();
        $this->assertInstanceOf(Car::class, $volvo);

        print PHP_EOL;
        $volvo->show();
    }

}