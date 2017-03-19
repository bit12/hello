<?php
namespace DesignPattern\Behavioral\Strategy;


class Chicken implements IFly
{

    public function fly()
    {
        return __CLASS__ . '->' . __FUNCTION__;
    }
}