<?php


namespace DesignPattern\Behavioral\Responsibility;

/**
 * 经理
 *
 * Class CommonManager
 * @package DesignPattern\Behavioral\Responsibility
 */
class CommonManager extends Manager
{
    public function apply(Request $request)
    {
        //自己处理
        if($request->type == '请假' && $request->num < '2') {
            print __CLASS__  . '->' . __FUNCTION__ . PHP_EOL;
        //交由上级处理
        } else {
            $this->manager->apply($request);
        }
    }

}