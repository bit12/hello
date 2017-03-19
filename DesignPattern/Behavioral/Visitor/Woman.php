<?php


namespace DesignPattern\Behavioral\Visitor;


class Woman extends Person
{

    public function __construct()
    {
        $this->type = '女人';
    }

    public function accept(Visitor $visitor)
    {
        $visitor->getWomanAction($this);
    }
}