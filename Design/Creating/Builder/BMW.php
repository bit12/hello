<?php
namespace Design\Creating\Builder;


class BMW extends CarBuilder
{

    public function buildHead()
    {
        $this->car->head = 'big';
    }

    public function buildEngine()
    {
        $this->car->engine = 'bwm';
    }

    public function buildTyre()
    {
        $this->car->tyre = 'red';
    }

    public function GetCar()
    {
        return $this->car;
    }
}