<?php


namespace DesignPattern\Behavioral\Mediator;

/**
 * Server用于发送响应
 *
 * Class Server
 * @package DesignPattern\Behavioral\Mediator
 */
class Server extends Colleague
{
    /**
     * process on server
     */
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}