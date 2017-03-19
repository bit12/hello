<?php


namespace DesignPattern\Behavioral\Visitor;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function test()
    {
        print PHP_EOL;
        print '男人这本书，内容要比封面吸引人;';
        print PHP_EOL;
        print '女人这本书，封面比内容更吸引人;';
        print PHP_EOL;

        $object = new Object();

        $object->add(new Man());
        $object->add(new Woman());

        $object->display(new SuccessVisitor());
        $object->display(new FailureVisitor());
        $object->display(new AmativenessVisitor());

    }

}