<?php


namespace DesignPattern\Behavioral\Visitor;


class Man extends Person
{

    public function __construct()
    {
        $this->type = '男人';
    }

    public function accept(Visitor $visitor)
    {
        $visitor->getManAction($this);
    }
}