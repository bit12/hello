<?php
namespace DesignPattern\Behavioral\Template;

abstract class AbstractMake
{
    public function make()
    {
        $this->makeHead();
        $this->makeMiddle();
        $this->makeBottom();

        print 'Job Done!!' . PHP_EOL;
    }

    public abstract function makeHead();
    public abstract function makeMiddle();
    public abstract function makeBottom();
}