<?php
namespace DesignPattern\Behavioral\Strategy;

class Bird implements IFly
{
    public function fly()
    {
        return __CLASS__ . "->" . __FUNCTION__ ;
    }

}