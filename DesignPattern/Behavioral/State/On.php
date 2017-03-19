<?php


namespace DesignPattern\Behavioral\State;


class On implements IState
{

    public function operation(OnOff $onOff)
    {
        print '开....' . PHP_EOL;

        $onOff->setState((new Off()));
    }
}