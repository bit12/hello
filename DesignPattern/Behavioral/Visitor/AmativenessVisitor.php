<?php
namespace DesignPattern\Behavioral\Visitor;


class AmativenessVisitor extends Visitor
{

    public function __construct()
    {
        $this->stateName = '恋爱';
    }

    public function getManAction(Man $man)
    {
        print  $man->type . '恋爱时，凡事不懂也要装懂；' . PHP_EOL;
    }

    public function getWomanAction(Woman $woman)
    {
        print $woman->type . '恋爱时，遇事懂也装作不懂;' . PHP_EOL;
    }

}