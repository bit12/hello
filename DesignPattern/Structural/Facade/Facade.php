<?php
namespace DesignPattern\Structure\Facade;


class Facade
{
    /**
     * @var IOs
     */
    protected $os;

    /**
     * @var IBios
     */
    protected $bios;

    /**
     * This is the perfect time to use a dependency injection container
     * to create an instance of this class
     *
     * @param IBios $bios
     * @param IOs   $os
     */
    public function __construct(IBios $bios, IOs $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     * turn on the system
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * turn off the system
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}