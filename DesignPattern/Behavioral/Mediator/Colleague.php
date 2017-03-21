<?php


namespace DesignPattern\Behavioral\Mediator;

/**
 * Colleague是一个抽象的同事类，但是它只知道中介者Mediator，而不知道其他同事
 *
 * Class Colleague
 * @package DesignPattern\Behavioral\Mediator
 */
abstract  class Colleague
{

    /**
     * this ensures no change in subclasses
     *
     * @var IMediator
     */
    private $mediator;

    /**
     * @param IMediator $medium
     */
    public function __construct(IMediator $medium)
    {
        $this->mediator = $medium;
    }

    // for subclasses
    protected function getMediator()
    {
        return $this->mediator;
    }

}