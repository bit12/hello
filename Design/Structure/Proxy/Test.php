<?php


namespace Design\Structure\Proxy;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function getSubject()
    {
        return [
            [(new Subject('MI'))]
        ];
    }

    /**
     * @dataProvider getSubject
     */
    public function testSubject(ISubject $subject)
    {
        print PHP_EOL;

        $subject->say();
        $subject->run();
    }

    /**
     * @dataProvider getSubject
     */
    public function testProxy(ISubject $subject)
    {
        print PHP_EOL;

        $proxy = new Proxy($subject);

        $proxy->say();
        $proxy->run();
    }

}