<?php


namespace DesignPattern\Structure\Proxy;


class Subject implements ISubject
{

    private $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function say()
    {
        print  $this->name . ' say '  . PHP_EOL;
    }

    public function run()
    {
        print  $this->name . ' run '  . PHP_EOL;
    }

}