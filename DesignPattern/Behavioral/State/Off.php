<?php


namespace DesignPattern\Behavioral\State;


class Off implements IState
{
    public function operation(OnOff $onOff)
    {
        print '关....' . PHP_EOL;

        $onOff->setState((new On()));
    }

}