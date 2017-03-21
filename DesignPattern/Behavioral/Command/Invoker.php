<?php


namespace DesignPattern\Behavioral\Command;


class Invoker
{
    /**
     * @var ICommands
     */
    protected $command;

    /**
     * 在调用者中我们通常可以找到这种订阅命令的方法
     *
     * @param ICommand $cmd
     */
    public function setCommand(ICommand $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * 执行命令
     */
    public function run()
    {
        $this->command->execute();
    }
}