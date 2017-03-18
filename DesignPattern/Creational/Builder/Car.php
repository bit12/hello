<?php
namespace DesignPattern\Creational\Builder;

/**
 *
 * Class Car
 * @package DesignPattern\Creational\Builder
 */
class Car
{
    public $head;

    public $engine;

    public $tyre;

    public function show()
    {
        print $this->head . PHP_EOL;
        print $this->engine . PHP_EOL;
        print $this->tyre . PHP_EOL;
    }






}