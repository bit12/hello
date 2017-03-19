<?php
namespace DesignPattern\Behavioral\Visitor;


class FailureVisitor extends Visitor
{
    public function __construct()
    {
        $this->stateName = '失败';
    }

    public function getManAction(Man $man)
    {
        print $man->type . '失败时，闷头喝酒，谁也不用劝;' . PHP_EOL;
    }

    public function getWomanAction(Woman $woman)
    {
        print $woman->type . '失败时，眼泪汪汪，谁也劝不了; ' . PHP_EOL;
    }
}