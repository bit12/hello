<?php
namespace DesignPattern\Structure\Facade;


interface IBios
{
    /**
     * execute the BIOS
     */
    public function execute();

    /**
     * wait for halt
     */
    public function waitForKeyPress();

    /**
     * launches the OS
     *
     * @param IOs $os
     */
    public function launch(IOs $os);

    /**
     * power down BIOS
     */
    public function powerDown();
}