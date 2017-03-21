<?php
namespace DesignPattern\Behavioral\Command;

interface ICommand
{
    /**
     * 在命令模式中这是最重要的方法,
     * Receiver在构造函数中传入.
     */
    public function execute();
}