<?php


namespace DesignPattern\Behavioral\State;


class OnOff
{
    private $state;


    /**
     *
     * OnOff constructor.
     */
    public function __construct()
    {
        $this->setState((new Off()));
    }


    public function setState(IState $state)
    {
        $this->state = $state;
    }

    public function operation()
    {
        $this->state->operation($this);
    }

}