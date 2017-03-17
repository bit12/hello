<?php
namespace Design\Structure\Decorator;


class Dog implements IComponent
{


    public function warning()
    {
        print '汪汪' . PHP_EOL;
    }

}