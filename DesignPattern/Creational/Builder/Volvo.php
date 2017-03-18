<?php
namespace DesignPattern\Creational\Builder;


class Volvo extends CarBuilder
{
    public function buildHead()
    {
        $this->car->head = 'min';
    }

    public function buildEngine()
    {
        $this->car->engine = 'volvo';
    }

    public function buildTyre()
    {
        $this->car->tyre = 'white';
    }

    public function getCar()
    {
        return $this->car;
    }
}