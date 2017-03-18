<?php
namespace DesignPattern\Structure\Decorator;


class Collide extends Attack
{
    public function warning()
    {
        print "Collide ";
        parent::warning();
    }
}