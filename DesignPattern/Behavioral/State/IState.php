<?php
namespace DesignPattern\Behavioral\State;


interface IState
{
    public function operation(OnOff $order);
}