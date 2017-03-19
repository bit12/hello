<?php
namespace DesignPattern\Behavioral\Visitor;


class SuccessVisitor extends Visitor
{

    public function __construct()
    {
        $this->stateName = '成功';
    }

    public function getManAction(Man $man)
    {
        print $man->type . '成功时，背后多半有一个伟大的女人;' . PHP_EOL;
    }

    public function getWomanAction(Woman $woman)
    {
        print $woman->type . '成功时，背后多半有一个失败的男人;' . PHP_EOL;
    }
}