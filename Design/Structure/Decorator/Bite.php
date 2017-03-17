<?php
namespace Design\Structure\Decorator;


class Bite extends Attack
{

    public function warning()
    {
        print "Bite ";
        parent::warning();
    }

}